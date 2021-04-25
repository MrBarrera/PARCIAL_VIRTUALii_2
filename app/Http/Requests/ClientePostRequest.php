<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientePostRequest extends FormRequest
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
            'nit' => [
                'nullable','max:45'
            ],
            'nombre' => [
                'nullable','max:45'
            ],
            'fecha_nacimiento' => [
                'required','max:45'
            ],
            'correo' => [
                'nullable','max:45'
            ],
            'telefono' => [
                'nullable','max:45'
            ],
            'categoria_idcategoria' => [
                'nullable','max:45'
            ],
            'genero_idgenero' => [
                'nullable','max:45'
            ],
            'departamento_iddepartamento' => [
                'nullable','max:45'
            ],
        ];
    }
}
