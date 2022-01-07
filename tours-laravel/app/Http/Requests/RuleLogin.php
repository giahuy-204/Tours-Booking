<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleLogin extends FormRequest
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
            'email' => 'required|email|max:50',
            'password'=>'required',
        ];
    }

    public function messages()
    {
        return [

            'email.required' => 'You need to fill your email',
            'email.max' => 'Your email need to be shorter',
            'email.email' => 'Your email does not seems like an email',

            'password.required' => 'You need to fill your password',
        ];
    }
}
