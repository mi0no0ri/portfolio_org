<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordRequest extends FormRequest
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
            'currentPassword' => 'string|required',
            'password' => 'string|required|min:8|different:currentPassword',
            'confirmPassword' => 'string|requeired|confirmed:password',
        ];
    }
    public function messages(){
        return [
            'currentPassword.string' => '現在のパスワードは文字列で入力してください。',
            'currentPassword.required' => '現在のパスワードを入力してください。',
            'password.string' => 'パスワードは文字列で入力してください。',
            'password.required' => 'パスワードを入力してください。',
            'password.different' => 'パスワードが変更されていません。',
            'password.min' => 'パスワードは8文字以上で入力してください。',
            'confirmPassword.string' => '新しいパスワードは文字列で入力してください。',
            'confirmPassword.required' => 'パスワード（確認）を入力してください。',
            'confirmPassword.confirm' => 'パスワードが一致していません。',
        ];
    }

}
