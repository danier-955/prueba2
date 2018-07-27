<?php

namespace App;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
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
        'tipo_docu', 'docu_alum', 'nomb_alum', 'pape_alum', 'sape_alum', 'sexo_alum',
        'fech_naci', 'dire_alum', 'barr_alum', 'corr_alum', 'tele_alum', 'nomb_acud',
        'pare_acud', 'obse_alum',
    ];

    /**
     * The attributes dates.
     *
     * @var array
     */
    protected $dates = [
        'fech_naci',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'sexo_alum' => 'string',
    ];

    /*
    |----------------------------------------------------------------------
    | Relaciones
    |----------------------------------------------------------------------
    |
    */

    /**
     * Alumnos tienen muchos eventos.
     *
     * @return Model
     */
    public function eventos()
    {
        return $this->belongsToMany(Evento::class);
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
