<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LanguageRequest extends FormRequest
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
            'language' => 'required|string|max:20',
        ];
    }
    public function messages(){
        return [
            'language.required' => '使用言語を入力してください。',
            'language.string' => '使用言語は文字列で入力してください。',
            'language.max' => '使用言語は20文字以内で入力してください。'
        ];
    }
}
