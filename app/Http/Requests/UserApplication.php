<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserApplication extends FormRequest
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
            'username' => 'required|max:30',
            'email' => 'required|unique:user|max:50',
            'mobile' => 'required|max:255',
            'name' => 'required|max:30',
            'surname' => 'required|max:30',
            'job_title' => 'required',
            'password' => 'required|max:60',
            'confirmation_password' => 'required|same:password' 
        ];
    }
  
    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'username.required' => 'Username is required',
            'username.max' => 'Username cannot exceed 30 characters',
            'name.required' => 'Firstname is required',
            'surname.required' => 'Surname is required',
            'email.required' => 'Your email is required',
            'email.unique' => 'Email has already been taken',
            'email.max' => 'Email cannot exceed 50 characters',
            'mobile.required' => 'Phone Number is required',
            'password.required' => 'Your password is required',
            'confirmation_password.required' => 'Your confirm password is required',             
            'confirmation_password.same' => 'Password does not match',                         
            'job_title.required' => 'BJob title is required',             
        ];
    }
}
