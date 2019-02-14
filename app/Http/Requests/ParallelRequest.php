<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParallelRequest extends FormRequest
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
            'owner'=> 'required|min:3|max:500',
            'product'=> 'required|min:3|max:500',
            'substances'=> 'required|min:3|max:500',
            'referenceProduct'=> 'required|min:3|max:500',
            'manufacturer'=> 'required|min:3|max:500',
            'validReferenceProduct'=> 'required|min:3|max:500',
            'parallelTrade'=> 'required|min:3|max:500',
            'validParallelTrade'=> 'required|min:3|max:500',
            'typeId'=> 'min:1',
            'note'=> 'required|min:3|max:500',
        ];
    }
}
