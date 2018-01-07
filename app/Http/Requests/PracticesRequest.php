<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PracticesRequest extends FormRequest
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
//            'linkId'=> 'required|min:3|max:100|latin',
            'name'=> 'required|min:3|max:100',
            'fullName'=> 'required|min:3|max:500',
        ];
    }

    /**
     * Мои съобщения за грешки.
     * @return array
     */
    public function messages()
    {
        return [
            'linkId.required' => 'Попълни линка!',
            'linkId.min' => 'Минимален брой символи за линка - 3!',
            'linkId.max' => 'Максимален брой символи за линка - 100!',
            'linkId.latin' => 'За линка пиши само на Латиница!',

            'name.required' => 'Попълни името на Вредителя!',
            'name.min' => 'Минимален брой символи за името - 3!',
            'name.max' => 'Максимален брой символи за името - 100!',


            'fullName.required' => 'Попълни Целия линк!',
            'fullName.min' => 'Минимален брой символи за Целия линк - 3!',
            'fullName.max' => 'Максимален брой символи за името - 500!',
        ];
    }
}
