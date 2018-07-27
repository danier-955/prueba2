<?php

namespace App;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
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
        'titu_even', 'slug_even', 'foto_even', 'desc_even', 'inic_even', 'fina_even',
        'cupo_even', 'administrativo_id',
    ];

    /**
     * The attributes dates.
     *
     * @var array
     */
    protected $dates = [
        'inic_even', 'fina_even',
    ];

    /*
    |----------------------------------------------------------------------
    | Relaciones
    |----------------------------------------------------------------------
    |
    */

    /**
     * Evento tiene un administrativo.
     *
     * @return Model
     */
    public function administrativo()
    {
        return $this->belongsTo(Administrativo::class);
    }

    /**
     * Eventos tienen muchos alumnos.
     *
     * @return Model
     */
    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class);
    }

    /**
     * Eventos tienen muchos pagos.
     *
     * @return Model
     */
    public function pagos()
    {
        return $this->belongsToMany(Pago::class);
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
