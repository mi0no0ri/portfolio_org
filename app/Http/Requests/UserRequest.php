<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|string|max:15',
            'email' => 'required|email|string',
            'introduce' => 'required|string|max:255',
            'image' => 'required|file|mimes:jpeg,jpg,png,',
            'background' => 'required|file|mimes:jpeg,jpg,png',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力してください。',
            'name.string' => '名前を文字列で入力してください。',
            'name.max' => '名前は15文字以内で入力してください。',
            'email.required' => 'メールアドレスを入力してください。',
            'email.email' => 'メールアドレス欄にはメールアドレスを入力してください。',
            'email.string' => 'メールアドレスは文字列で入力してください。',
            'introduce.required' => '自己紹介を入力してください。',
            'introduce.string' => '自己紹介は文字列で入力してください。',
            'introduce.max' => '自己紹介は255文字以内で入力してください。',
            'image.required' => 'トップ画像を指定してください。',
            'image.file' => 'トップ画像はファイルで指定してくだいさい。',
            'image.mimes' => 'トップ画像はjpeg,jpg,pngで指定してくだいさい。',
            'background.required' => '背景画像を指定してくだいさい。',
            'background.file' => '背景画像はファイルで指定してくだいさい。',
            'background.mimes' => '背景画像はjpeg,jpg,pngで指定してください。',
        ];
    }
}
