<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleRegister extends FormRequest
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
            'first_name'=>'required|max:50',
            'last_name'=>'required|max:50',
            'email' => 'required|email|max:50|unique:user,email',
            'password'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'You need to fill your first name',
            'first_name.max' => 'Your first name need to be shorter',

            'last_name.required' => 'You need to fill your last name',
            'last_name.max' => 'Your last name need to be shorter',

            'email.required' => 'You need to fill your email',
            'email.max' => 'Your email need to be shorter',
            'email.email' => 'Your email does not seems like an email',
            'email.unique' => 'Your email existed',

            'password.required' => 'You need to fill your password',
        ];
    }
}
