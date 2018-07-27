<?php

namespace App;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Acudiente extends Model
{
    use Uuids;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tipo_docu', 'docu_acud', 'nomb_acud', 'pape_acud', 'sape_acud', 'sexo_acud',
        'dire_acud', 'barr_acud', 'corr_acud', 'tele_acud', 'prof_acud', 'user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'sexo_acud' => 'string',
    ];

    /*
    |----------------------------------------------------------------------
    | Relaciones
    |----------------------------------------------------------------------
    |
    */

    /**
     * Acudiente tiene un usuario.
     *
     * @return Model
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Acudientes tienen muchos estudiantes.
     *
     * @return Model
     */
    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class);
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
