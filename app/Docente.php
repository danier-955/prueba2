<?php

namespace App;

use App\Scopes\DocenteScope;
use App\Traits\Uuids;
use Facades\App\Facades\Sexo;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use Uuids;

    /**
     * Global scope
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new DocenteScope);
    }

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
        'docu_doce', 'nomb_doce', 'pape_doce', 'sape_doce', 'sexo_doce', 'dire_doce',
        'barr_doce', 'corr_doce', 'tele_doce', 'titu_doce', 'espe_doce', 'expe_doce',
        'obse_doce', 'empleado_id', 'user_id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'sexo_doce' => 'string',
    ];

    /*
    |----------------------------------------------------------------------
    | Relaciones
    |----------------------------------------------------------------------
    |
    */

    /**
     * Docente tiene un empleado.
     *
     * @return Model
     */
    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    /**
     * Docente tiene un usuario.
     *
     * @return Model
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Docentes tienen muchas asignaturas.
     *
     * @return Model
     */
    public function asignaturas()
    {
        return $this->hasMany(Asignatura::class);
    }

    /**
     * Docentes tienen muchas mesas de ayuda.
     *
     * @return Model
     */
    public function mesas()
    {
        return $this->hasMany(Mesa::class);
    }

    /**
     * Docentes tienen muchas planeamientos.
     *
     * @return Model
     */
    public function planeamientos()
    {
        return $this->hasMany(Planeamiento::class);
    }

    /**
     * Docentes tienen muchos subgrados.
     *
     * @return Model
     */
    public function subGrados()
    {
        return $this->belongsToMany(SubGrado::class);
    }

    /*
    |----------------------------------------------------------------------
    | Métodos
    |----------------------------------------------------------------------
    |
    */

    /**
     * Devuelve el nombre del sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return optional(Sexo::find($this->sexo_doce))['texto'];
    }

    /*
    |----------------------------------------------------------------------
    | Scopes
    |----------------------------------------------------------------------
    |
    */

}
