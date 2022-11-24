<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre_per'=> 'required|string|max:255',
            'apellido_pa_per'=> 'required|string|max:255',
            'apellido_ma_per'=> 'required|string|max:255',
            'ci_per'=> 'required',
            'cel_per'=> 'required',
            'fecha_nac'=> 'required|date',
            'num_seguro'=> 'nullable',
            'donante'=> 'required',
            'id_tipo_sangre'=> 'required',
            'id_pariente'=>'required'
        ];
    }
}
