<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CultureRequest extends FormRequest
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
            'group_id'=> 'required',
            'name'=> 'required|min:3|max:100|cyrillic_with',
            'latin_name'=> 'required|min:3|max:100|latin'
        ];
    }

    /**
     * Мои съобщения за грешки.
     * @return array
     */
    public function messages()
    {
        return [
            'group_id.required' => 'Избери Група!',


            'name.required' => 'Попълни името на Кутурата!',
            'name.min' => 'Минимален брой символи за името - 3!',
            'name.max' => 'Максимален брой символи за името - 100!',
            'name.cyrillic_with' => 'За име на Кутура пиши само на кирилица!',

            'latin_name.required' => 'Попълни Латинското име на Кутурата!',
            'latin_name.min' => 'Минимален брой символи за Латинското име - 3!',
            'latin_name.max' => 'Максимален брой символи за Латинското име - 100!',
            'latin_name.latin' => 'Латинското име пиши само на Латински!',
        ];
    }
}
