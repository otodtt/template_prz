<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdjuvantRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=> 'required|min:3|max:5000',
            'owner'=> 'required|min:3|max:5000',
            'action'=> 'required|min:3|max:5000',
            'isActive'=> 'required',
        ];
    }
}
