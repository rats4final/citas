<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditHistorialRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'detalles_historial' => 'required|string|min:20|max:255',
        ];
    }
    public function messages()
{
    return [
        'detalles_historial.required' => 'Es necesesario que tenga datos en estte campo',
        'detalles_historial.min' => 'Los detalles minimamente deben tener mas de 20 caracteres',
        'detalles_historial.max' => 'Los detalles no deben superar los 255 caracteres'
    ];
}
}
