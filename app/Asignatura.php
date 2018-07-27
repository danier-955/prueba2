<?php

namespace App;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
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
        'nomb_asig', 'peso_asig', 'log1_asig', 'log2_asig', 'log3_asig', 'log4_asig',
        'area_id', 'docente_id', 'grado_id',
    ];

    /*
    |----------------------------------------------------------------------
    | Relaciones
    |----------------------------------------------------------------------
    |
    */

    /**
     * Asignatura tienen una area.
     *
     * @return Model
     */
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    /**
     * Asignatura tienen un docente.
     *
     * @return Model
     */
    public function docente()
    {
        return $this->belongsTo(Docente::class);
    }

    /**
     * Asignatura tienen un grado.
     *
     * @return Model
     */
    public function grado()
    {
        return $this->belongsTo(Grado::class);
    }

    /**
     * Asignaturas tienen muchas asistencias.
     *
     * @return Model
     */
    public function asistencias()
    {
        return $this->hasMany(Asistencia::class);
    }

    /**
     * Asignaturas tienen muchas notas.
     *
     * @return Model
     */
    public function notas()
    {
        return $this->hasMany(Nota::class);
    }

    /**
     * Asignaturas tienen muchas fechas extras de notas.
     *
     * @return Model
     */
    public function fechas() // Podría restructurarse esta relación
    {
        return $this->belongsToMany(Fecha::class);
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
