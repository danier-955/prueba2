<?php

namespace App;

use App\Notifications\MyResetPassword;
use App\Traits\Uuids;
use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Facades\App\Facades\Estado;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Uuids, ShinobiTrait;

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
        'nombre', 'email', 'password', 'estado'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'estado' => 'string',
    ];

    /*
    |----------------------------------------------------------------------
    | Relaciones
    |----------------------------------------------------------------------
    |
    */

    /**
     * Users tienen muchas bitacoras.
     *
     * @return Model
     */
    public function bitacoras()
    {
        return $this->hasMany(Bitacora::class);
    }

    /**
     * User tiene un acudiente.
     *
     * @return Model
     */
    public function acudiente()
    {
        return $this->hasOne(Acudiente::class);
    }

    /**
     * User tiene un estudiante.
     *
     * @return Model
     */
    public function estudiante()
    {
        return $this->hasOne(Estudiante::class);
    }

    /**
     * User tiene un administrativo.
     *
     * @return Model
     */
    public function administrativo()
    {
        return $this->hasOne(Administrativo::class);
    }

    /**
     * User tiene un docente.
     *
     * @return Model
     */
    public function docente()
    {
        return $this->hasOne(Docente::class);
    }

    /**
     * Users tienen muchos permisos
     *
     * @return Model
     */
    /*public function permissions()
    {
        return $this->belongsToMany(Permission::class)->withTimestamps();
    }*/

    /**
     * Users tienen muchos roles.
     *
     * @return Model
     */
    /*public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }*/

    /*
    |----------------------------------------------------------------------
    | Métodos
    |----------------------------------------------------------------------
    |
    */

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MyResetPassword($token));
    }

    /**
     * Devuelve el nombre del estado
     *
     * @return string
     */
    public function getEstado()
    {
        return optional(Estado::find($this->estado))['texto'];
    }

    /**
     * Devuelve el color del estado
     *
     * @return string
     */
    public function getEstadoColor()
    {
        return Estado::getColor($this->estado);
    }

    /*
    |----------------------------------------------------------------------
    | Scopes
    |----------------------------------------------------------------------
    |
    */

}
