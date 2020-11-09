<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
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
            'correocontacto' => 'required|email',
            'nombrecontacto' => 'required',
            'numerocontacto' => 'required|numeric',
            'idcasa' => 'required|numeric',
            'mensajecontacto' => 'required'
           
        ];
    }

    public function messages()
{
    return [
        'correocontacto.required' => '*El correo es requerido',
        'correocontacto.email' => '*Debe ingresar un correo valido',

        'nombrecontacto.required' => '*Debe agregar su nombre',

        'numerocontacto.required' => '*Debe agregar su numero de telefono',
        'numerocontacto.numeric' => '*Numero de telefono no valido',

        'mensajecontacto.required' => '*Debe agregar un mensaje',

        
        
    ];
}
}
