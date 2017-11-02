<?php

namespace adVentas\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaFormRequest extends FormRequest
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
        /*Nombres de objetos creados en mi html*/
        return [
            'nombre'=>'required|max:50',
            'descripcion'=>'max:250',
        ];
    }
}