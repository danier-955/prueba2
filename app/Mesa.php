<?php

namespace App;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use Uuids;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titu_peti', 'fech_peti', 'desc_peti', 'esta_peti', 'obse_apro', 'docente_id',
        'sub_grado_id',
    ];

    /**
     * The attributes dates.
     *
     * @var array
     */
    protected $dates = [
        'fech_peti',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'esta_peti' => 'string',
    ];

    /*
    |----------------------------------------------------------------------
    | Relaciones
    |----------------------------------------------------------------------
    |
    */

    /**
     * Mesa tiene un docente.
     *
     * @return Model
     */
    public function docente()
    {
        return $this->belongsTo(Docente::class);
    }

    /**
     * Mesa tiene un subGrado.
     *
     * @return Model
     */
    public function subGrado()
    {
        return $this->belongsTo(SubGrado::class);
    }

    /**
     * Mesas tienen muchos inventarios.
     *
     * @return Model
     */
    public function inventarios()
    {
        return $this->belongsToMany(Inventario::class)->withPivot('cant_desc', 'esta_desc');
    }

    /**
     * Mesas tienen muchas salidas.
     *
     * @return Model
     */
    public function salidas()
    {
        return $this->hasMany(Salida::class);
    }

    /*
    |----------------------------------------------------------------------
    | Métodos
    |----------------------------------------------------------------------
    |
    */

    /*
    |----------------------------------------------------------------------
    | Scopes
    |----------------------------------------------------------------------
    |
    */

}
