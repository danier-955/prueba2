<?php

namespace App\Http\Requests;

use Facades\App\Facades\Operacion;
use Illuminate\Foundation\Http\FormRequest;

class BusquedaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            /**
             * Bitácoras
             */
            'fech_inic'     => 'nullable|required_with:fech_fina|date',
            'fech_fina'     => 'nullable|required_with:fech_inic|date|after_or_equal:fech_inic',
            'oper_bita'     => 'nullable|in:'. implode(',', Operacion::indexados()),
            'usua_bita'     => 'nullable|string|max:100|regex:/^[a-zA-ZáéíóúàèìòùäëïöüñÁÉÍÓÚÄËÏÖÜÑ\'\s]+$/i',
        ];
    }
}
