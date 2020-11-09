<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PopiedadRequest extends FormRequest
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
            'propiedad' => 'required|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'image' => 'required|image',
            'descripcion' => 'required',
            'precio' => 'required|numeric|max:10000',
            'habitaciones' => 'required|integer',
            'wc' => 'required|integer',
            'estacionamiento' => 'required|integer',
            'metros' => 'required|numeric'
        ];
    }

    public function messages()
{
    return [
        'propiedad.required' => '*El nombre de la propiedad es requerido',
        'propiedad.regex' => '*Deben ser solo letras',

        'image.required' => '*Debe agregar una imagen',
        'image.image' => '*Debe ser una imagen',
        

        'descripcion.required' => '*Debe agregar una descripcion de la propiedad',
        

        'precio.required' => '*Debe agregar una precio para su propiedad',
        'precio.numeric' => '*El precio debe ser numérico.',
        'precio.max' => '*El precio no debe ser muy alto.',

        'habitaciones.required' => '*Debe agregar un numero de habitaciones',
        'habitaciones.integer' => '*El numero debe ser entero',
        

        'wc.required' => '*Debe agregar un numero de baños',
        'wc.integer' => '*El numero debe ser entero',

        'estacionamiento.required' => '*Debe agregar un numero de estacionamientos',
        'estacionamiento.integer' => '*El numero debe ser entero',

        'metros.required' => '*Debe agregar los metros de la propiedad',
        'metros.numeric' => '*El precio debe ser numérico.',
        
        
    ];
}
}
