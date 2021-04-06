<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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
        return  [
            'last_name' => 'required|max:30',
            'first_name' => 'required|max:20',
            'middle_name' => 'required|max:30',
            'username' => 'required|max:300',
            'gender' => 'required',
            'age' => 'required',
            'track' => 'required',
            'experience' => 'required',
            'employment' => 'required',
            'education' => 'required',
            'email'   =>  'required',
            'password' => 'required|same:confirmed_password',
            'confirmed_password' => 'required|same:password',
            'info' => 'required'
        ];
    }
}
