<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleInput extends FormRequest
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
            'email'=>'required|max:50|email',
            'phone'=>'required|max:15',
            'adult_number'=>'required',
        ];
    }

     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

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

            'phone.required' => 'You need to fill your phone number',
            'phone.max' => 'Your phone number need to be shorter',

            'adult_number.required' => 'You need to fill number of adult want to join the tour ',
        ];
    }
}
