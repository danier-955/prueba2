<?php

namespace App;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Implemento extends Model
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
        'nomb_util', 'sub_grado_id',
    ];

    /*
    |----------------------------------------------------------------------
    | Relaciones
    |----------------------------------------------------------------------
    |
    */

    /**
     * Implemento tiene un subGrado.
     *
     * @return Model
     */
    public function subGrado()
    {
        return $this->belongsTo(SubGrado::class);
    }

    /**
     * Implementos tienen muchos estudiantes.
     *
     * @return Model
     */
    public function estudiantes()
    {
        return $this->belongsToMany(Estudiante::class)->withPivot('cant_util');
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
