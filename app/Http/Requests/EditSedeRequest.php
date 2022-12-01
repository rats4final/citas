<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditSedeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre_sede' => 'required|string|min:10|max:100',
            'direccion_sede' => 'required|string|min:10|max:120',
            'telefono_sede' => 'required|integer|min:8'

        ];
    }
    public function messages()
{
    return [
        'nombre_sede.required' => 'Es neceserio que este campo este llenado',
        'nombre_sede.min' => 'El nombre minimamente debe tener mas de 10 caracteres',
        'nombre_sede.max' => 'El nombre no debe superar los 120 caracteres',

        'direccion_sede.required' => 'Es neceserio que este campo este llenado',
        'direccion_sede.min' => 'La dirrecion minimamente debe tener mas de 10 caracteres',
        'direccion_sede.max' => 'La dirrecion no debe superar los 120 caracteres',

        'telefono_sede.required' => 'Es neceserio que este campo este llenado',
        'telefono_sede.integer' => 'Debe ser un numero no una palabra',
        'telefono_sede.min' => 'El telefono minimamente debe tener 8 numeros',
        'telefono_sede.max' => 'El telefono maximo debe tener 10 numeros'

    ];
}
}
