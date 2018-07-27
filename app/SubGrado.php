<?php

namespace App;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class SubGrado extends Model
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
        'abre_subg', 'cant_estu', 'grado_id',
    ];

    /*
    |----------------------------------------------------------------------
    | Relaciones
    |----------------------------------------------------------------------
    |
    */

    /**
     * Subgrado tiene un grado.
     *
     * @return Model
     */
    public function grado()
    {
        return $this->belongsTo(Grado::class);
    }

    /**
     * Subgrados tienen muchos estudiantes.
     *
     * @return Model
     */
    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class);
    }

    /**
     * Subgrados tienen muchos implementos.
     *
     * @return Model
     */
    public function implementos()
    {
        return $this->hasMany(Implemento::class);
    }

    /**
     * Subgrados tienen muchas mesas.
     *
     * @return Model
     */
    public function mesas()
    {
        return $this->hasMany(Mesa::class);
    }

    /**
     * Subgrados tienen muchos docentes.
     *
     * @return Model
     */
    public function docentes()
    {
        return $this->belongsToMany(Docente::class);
    }

    /**
     * Subgrados tienen muchos practicantes.
     *
     * @return Model
     */
    public function practicantes()
    {
        return $this->belongsToMany(Practicante::class);
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
