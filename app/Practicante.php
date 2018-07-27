<?php

namespace App;

use Carbon\Carbon;
use App\Traits\Uuids;
use Facades\App\Facades\Documento;
use Facades\App\Facades\Sexo;
use Illuminate\Database\Eloquent\Model;

class Practicante extends Model
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
        'tipo_docu', 'docu_prac', 'nomb_prac', 'pape_prac', 'sape_prac', 'sexo_prac',
        'dire_prac', 'barr_prac', 'corr_prac', 'tele_prac', 'padr_prac', 'madr_prac',
        'cole_prov', 'seme_curs', 'hora_paga', 'inic_prac', 'fina_prac', 'obse_prac',
    ];

    /**
     * The attributes dates.
     *
     * @var array
     */
    protected $dates = [
        'inic_prac', 'fina_prac',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'sexo_prac' => 'string',
    ];

    /*
    |----------------------------------------------------------------------
    | Mutadores
    |----------------------------------------------------------------------
    |
    */

    /**
     * Convierte el string a fecha inicial al momento de guardar.
     *
     * @var value
     * @return void
     */
    public function setInicPracAttribute($value)
    {
        $this->attributes['inic_prac'] = Carbon::parse($value);
    }

    /**
     * Convierte el string a fecha final al momento de guardar.
     *
     * @var value
     * @return void
     */
    public function setFinaPracAttribute($value)
    {
        $this->attributes['fina_prac'] = Carbon::parse($value);
    }

    /*
    |----------------------------------------------------------------------
    | Relaciones
    |----------------------------------------------------------------------
    |
    */

    /**
     * Practicantes tienen muchos subGrados.
     *
     * @return Model
     */
    public function subGrados()
    {
        return $this->belongsToMany(SubGrado::class);
    }

    /**
     * Practicantes tienen muchos docentes.
     *
     * @return Model
     */
    public function docentes()
    {
        return $this->hasMany(Docente::class)
                    ->withPivot('fech_segu', 'hora_lleg', 'hora_sali', 'acti_reali', 'hora_cump', 'obse_segu');
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
        return optional(Sexo::find($this->sexo_prac))['texto'];
    }

    public function getGrado()
    {   
        if (!is_null($this->subGrados))
        {   
            $subGrado = $this->subGrados->first();
            $grado = $subGrado->grado;

            return optional($grado)->abre_grad . ' &middot; ' . $subGrado->abre_subg . ' &middot; Jornada '. optional($grado)->getJornada();
        }        

    }

     public function getGradoId()
    {   
        if (!is_null($this->subGrados))
        {   
            return $this->subGrados->first()->id;
        }        

    }

    /*
    |----------------------------------------------------------------------
    | Scopes
    |----------------------------------------------------------------------
    |
    */

}
