<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVideo extends FormRequest
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
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
            'video' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nombre del video',
        ];
    }

    public function messages()
    {
        return [
            'descripcion.required' => "Debe ingresar una descripción del video",
        ];
    }
}
