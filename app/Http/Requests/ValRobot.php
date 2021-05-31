<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValRobot extends FormRequest
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
                'nombre' => 'required|min:5',
                'descripcion' => 'required|min:10',
                'tipo' => 'required',
                'imagen' => 'required|image|max:2048'
        ];
    }

    public function attributes()
    {
        return[

        ];
    }

    public function messages()
    {
        return [
            'nombre.required' =>'Es obligatorio darle un nombre, Dr. Wily',
            'descripcion.required' =>'Es obligatorio darle una descripcion, Dr. Wily',
            'tipo.required' =>'Defina el tipo, Dr. Wily',
            'imagen.required' =>'Es obligatorio seleccionar una imagen, Dr. Wily'
        ];
    }
}
