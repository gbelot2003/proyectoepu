<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CalificacionesRequest extends Request
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
            'recomendacion_id' => 'required|integer',
            'calificacion' => 'required|integer',
            'documento' => 'max:10000|mimes:doc,docx,pdf', //a required, max 10000kb, doc or docx file
            'details' => 'required|string',
        ];
    }
}
