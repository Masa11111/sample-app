<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrudRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'profile' => 'required',
            'password' => 'required|min:8|regex:/^[a-zA-Z0-9-]+$/|max:20'
        ];
    }

    public function messages()
    {
        return [
            'required' => '必須項目です',
            'password.min' => '８文字以上で入力してください',
            'regex' => '英数字で入力してください',
            'password.max' => '20文字以下で入力してください',
        ];
    }
}
