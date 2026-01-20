<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado a hacer esta petición.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Reglas de validación para esta petición.
     */
    public function rules()
    {
        return [
            'title'  => 'required|min:3',
            'author' => 'required',
            'year'   => 'nullable|numeric|between:1500,' . date('Y'),
            'pages'  => 'nullable|numeric|min:1',
        ];
    }
}
