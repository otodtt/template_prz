<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcaricideRequest extends FormRequest
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
            'name'=> 'required|min:3|max:500',
            'manufacturersId'=> 'required',
//            'firmName'=> 'required|min:3|max:500',
            'permission'=> 'required|min:3|max:100',
            'valid'=> 'required|min:3|max:100',
//            'dateOrder'=> 'required|min:3|max:100',
            'category'=> 'required',
            'pestDescription'=> 'required|min:3|max:300'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Попълни името на Продукта!',
            'name.min' => 'Минимален брой символи за името - 3!',
            'name.max' => 'Максимален брой символи за името - 500!',

            'manufacturersId.required' => 'Избери фирмата!',

//            'firmName.required' => 'Попълни името на фирмата!',
//            'firmName.min' => 'Минимален брой символи за името на фирмата - 3!',
//            'firmName.max' => 'Максимален брой символи за името  на фирмата - 500!',

            'permission.required' => 'Попълни Разрешителното!',
            'permission.min' => 'Минимален брой символи за Разрешителното - 3!',
            'permission.max' => 'Максимален брой символи за Разрешителното - 100!',

            'valid.required' => 'Попълни Валидно до!',
            'valid.min' => 'Минимален брой символи за Валидно - 3!',
            'valid.max' => 'Максимален брой символи за Валидно - 100!',

//            'dateOrder.required' => 'Попълни Заповед!',
//            'dateOrder.min' => 'Минимален брой символи за Заповед - 3!',
//            'dateOrder.max' => 'Максимален брой символи за Заповед - 100!',

            'category.required' => 'Избери Категорията на употреба!',
        ];
    }
}
