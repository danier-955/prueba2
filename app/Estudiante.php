<?php

namespace App;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
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
        'tipo_docu', 'docu_estu', 'nomb_estu', 'pape_estu', 'sape_estu', 'sexo_estu',
        'fech_naci', 'dire_estu', 'barr_estu', 'corr_estu', 'tele_estu', 'padr_estu',
        'madr_estu', 'pare_acud', 'cole_prov', 'eps_estu', 'copi_docu', 'copi_grad',
        'tipo_estu', 'carn_vacu', 'foto_estu', 'fech_reti', 'fech_grad', 'obse_estu',
        'acudiente_id', 'sub_grado_id', 'user_id',
    ];

    /**
     * The attributes dates.
     *
     * @var array
     */
    protected $dates = [
        'fech_naci', 'fech_reti', 'fech_grad',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'sexo_estu' => 'string',
        'tipo_estu' => 'string',
    ];

    /*
    |----------------------------------------------------------------------
    | Relaciones
    |----------------------------------------------------------------------
    |
    */

    /**
     * Estudiante tiene un usuario.
     *
     * @return Model
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Estudiante tiene un subGrado.
     *
     * @return Model
     */
    public function subGrado()
    {
        return $this->belongsTo(SubGrado::class);
    }

    /**
     * Estudiante tiene un acudiente.
     *
     * @return Model
     */
    public function acudiente()
    {
        return $this->belongsTo(Acudiente::class);
    }

    /**
     * Estudiantes tienen muchos implementos.
     *
     * @return Model
     */
    public function implementos()
    {
        return $this->belongsToMany(Implemento::class)->withPivot('cant_util');
    }

    /**
     * Estudiantes tienen muchas nominas.
     *
     * @return Model
     */
    public function nominas()
    {
        return $this->belongsToMany(Nomina::class);
    }

    /**
     * Estudiantes tienen muchas asistencias.
     *
     * @return Model
     */
    public function asistencias()
    {
        return $this->hasMany(Asistencia::class);
    }

    /**
     * Estudiantes tienen muchas notas.
     *
     * @return Model
     */
    public function notas()
    {
        return $this->hasMany(Nota::class);
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
