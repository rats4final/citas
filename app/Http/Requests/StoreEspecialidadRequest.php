<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEspecialidadRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }
    // {$this->post->id}


    public function rules()
    {
        return [
            'nombre_especialidad' => 'required|string|min:5|max:40|unique:especialidades,nombre_especialidad',
            'descripcion_especialidad' => 'required|string|min:5|max:40',

        ];
    }
    public function messages()
{
    return [
        'nombre_especialidad.required' => 'Es neceserio que este campo este llenado',
        'nombre_especialidad.min' => 'El nombre minimamente debe tener mas de 5 caracteres',
        'nombre_especialidad.max' => 'El nombre no debe superar los 40 caracteres',
        'nombre_especialidad.unique' => 'El nombre debe ser unico',

        'descripcion_especialidad.required' => 'Es neceserio que este campo este llenado',
        'descripcion_especialidad.min' => 'La dirrecion minimamente debe tener mas de 5 caracteres',
        'descripcion_especialidad.max' => 'La dirrecion no debe superar los 40caracteres',

    ];
}
}


