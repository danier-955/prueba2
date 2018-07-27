<?php

namespace App;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Nomina extends Model
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
        'tota_nomi', 'tota_mora', 'pago_nomi', 'quin_nomi', 'mes_nomi', 'ano_nomi',
        'pago_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'pago_nomi' => 'string',
        'quin_nomi' => 'string',
    ];

    /*
    |----------------------------------------------------------------------
    | Relaciones
    |----------------------------------------------------------------------
    |
    */

    /**
     * Nomina tiene un pago.
     *
     * @return Model
     */
    public function pago()
    {
        return $this->belongsTo(Pago::class);
    }

    /**
     * Nomina tiene muchos empleados.
     *
     * @return Model
     */
    public function empleados()
    {
        return $this->belongsToMany(Empleado::class);
    }

    /**
     * Nomina tiene muchos estudiantes.
     *
     * @return Model
     */
    public function estudiantes()
    {
        return $this->belongsToMany(Estudiante::class);
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
