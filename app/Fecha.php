<?php

namespace App;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Fecha extends Model
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
        'fech_not1', 'fech_not2', 'fech_not3', 'fech_not4', 'fech_rec1', 'fech_rec2',
        'fech_rec3', 'fech_rec4', 'ano_fech',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'fech_not1' => 'array',
        'fech_not2' => 'array',
        'fech_not3' => 'array',
        'fech_not4' => 'array',
        'fech_rec1' => 'array',
        'fech_rec2' => 'array',
        'fech_rec3' => 'array',
        'fech_rec4' => 'array',
    ];

    /*
    |----------------------------------------------------------------------
    | Relaciones
    |----------------------------------------------------------------------
    |
    */

    /**
     * Users tienen muchas asignaturas.
     *
     * @return Model
     */
    public function asignaturas()
    {
        return $this->belongsToMany(Asignatura::class)
                    ->withPivot('fech_nota', 'peri_nota', 'moti_nota', 'tipo_nota');
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
