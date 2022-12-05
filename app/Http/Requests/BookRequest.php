<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'image' =>'required|file',
            'name' => 'required|min:3|max:50',
            'author' => 'required|min:3|max:50',
            'years' =>'required|required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Название не должно иметь меньше 3 символов',
            'author.required' => 'Имя автора не должно имень меньше 3 символов',
            'years.required' => 'Поле года,не должно быть пустым'
        ];
    }
}
