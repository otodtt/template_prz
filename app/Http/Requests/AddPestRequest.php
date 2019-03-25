<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPestRequest extends FormRequest
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
            'product' => 'required|min:2',
            'productId' => 'required',
            'dose' => 'required',
            'disease' => 'required|min:2',
            'category' => 'required'
        ];
    }
}
