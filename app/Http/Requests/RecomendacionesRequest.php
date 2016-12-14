<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RecomendacionesRequest extends Request
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
            'name' => 'required|string',
            'country_id' => 'required',
            'trecomendacion_list'  => 'required|array|min:1',
            'derechos_list'  => 'required|array|min:1'
        ];
    }
}
