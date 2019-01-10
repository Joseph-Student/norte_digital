<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
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
            'name' => 'required|max:250',
            'price' => 'required',
            'description' => 'required|max:255'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => ':attribute requerido',
            'name.max' => ':attribute no puede contener mas de 255 caracteres',
            'price.required' => 'El :attribute es requerido',
            'description.required' => 'La :attribute es requerida'
        ];
    }

    public function attributes()
    {
        return [
          'name' => 'Nombre',
          'price' => 'Precio',
          'description' => 'Descipcion'
        ];
    }
}
