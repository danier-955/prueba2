<?php

namespace App;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Administrativo extends Model
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
        'docu_admi', 'nomb_admi', 'pape_admi', 'sape_admi', 'sexo_admi', 'dire_admi',
        'barr_admi', 'corr_admi', 'tele_admi', 'titu_admi', 'espe_admi', 'expe_admi',
        'carg_admi', 'jorn_admi', 'obse_admi', 'empleado_id', 'user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'sexo_doce' => 'string',
        'carg_admi' => 'string',
        'jorn_admi' => 'string',
    ];

    /*
    |----------------------------------------------------------------------
    | Relaciones
    |----------------------------------------------------------------------
    |
    */

    /**
     * Administrativo tiene un empleado.
     *
     * @return Model
     */
    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    /**
     * Administrativo tiene un usuario.
     *
     * @return Model
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Administrativos tienen muchos eventos.
     *
     * @return Model
     */
    public function eventos()
    {
        return $this->hasMany(Evento::class);
    }

    /**
     * Administrativos tienen muchos calendarios.
     *
     * @return Model
     */
    public function calendarios()
    {
        return $this->hasMany(Calendario::class);
    }

    /**
     * Administrativos tienen muchas galerias.
     *
     * @return Model
     */
    public function galerias()
    {
        return $this->hasMany(Galeria::class);
    }

    /**
     * Administrativos tienen muchos inventarios.
     *
     * @return Model
     */
    public function inventarios()
    {
        return $this->hasMany(Inventario::class);
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
