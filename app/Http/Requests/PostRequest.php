<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|max:20',
            'description' => 'required|max:255',
            'postdetail' => 'required|max:50',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'タイトルは必須です。',
            'title.max' => '最大20文字までです。',
            'description.required' => '説明は必須です。',
            'description.max' => '最大255文字です。',
            'postdetail.required' => 'イメージ画像は3枚必要です。',
            'postdetail.max' => '最大50文字です。',
        ];
    }
}
