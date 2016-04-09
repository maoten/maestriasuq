<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CuentaRequest extends Request
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
            'email'=>'min:5|max:50|required',
            'telefono'=>'min:6|max:45|required',
            'imagen'=>'mimes:jpeg,png,jpg'
        ];
    }
}