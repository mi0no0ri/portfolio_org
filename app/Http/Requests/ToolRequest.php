<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ToolRequest extends FormRequest
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
            'tool_id' => 'required|integer',
            'skill' => 'required|string|max:20',
        ];
    }
    public function messages(){
        return [
            'tool_id.required' => 'ツール選択を選んでください',
            'tool_id.integer' => 'ツール選択を選択肢から選んでください',
            'skill.required' => 'スキルを入力してください。',
            'skill.string' => 'スキル登録は文字列で入力してください。',
            'skill.max' => 'スキル登録は20文字以内で入力してください。',
        ];
    }
}
