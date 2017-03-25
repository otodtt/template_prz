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
            'link_id'=> 'required|min:3|max:100|latin',
            'name'=> 'required|min:3|max:100|cyrillic_with',
            'full_name'=> 'required|min:3|max:500',
            'text'=> 'required|min:3',
        ];
    }

    /**
     * Мои съобщения за грешки.
     * @return array
     */
    public function messages()
    {
        return [
            'link_id.required' => 'Попълни линка!',
            'link_id.min' => 'Минимален брой символи за линка - 3!',
            'link_id.max' => 'Максимален брой символи за линка - 100!',
            'link_id.latin' => 'За линка пиши само на Латиница!',

            'name.required' => 'Попълни името на Вредителя!',
            'name.min' => 'Минимален брой символи за името - 3!',
            'name.max' => 'Максимален брой символи за името - 100!',
            'name.cyrillic_with' => 'За име на Вредителя пиши само на кирилица!',

            'full_name.required' => 'Попълни Целия линк!',
            'full_name.min' => 'Минимален брой символи за Целия линк - 3!',
            'full_name.max' => 'Максимален брой символи за името - 500!',

            'text.required' => 'Попълни Текст за Вредителя!',
            'text.min' => 'Минимален брой символи за Текст за Вредителя- 3!'

        ];
    }
}
