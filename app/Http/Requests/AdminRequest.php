<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\Rule;

class AdminRequest extends FormRequest
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
            'fullname' => 'required|string',
            'username' => 'required|string|unique:admins',
            'email'    => 'required|email|unique:admins',
            'phone'    => 'required|numeric|unique:admins',
            'password' => 'required|confirmed|min:6',
        ];
    }
    
    public function messages()
    {
        return [

        ];
    }

    public function failedValidation(Validator $validator)
    {
        $errors = $validator->errors()->toArray();
        return view('admin.store')->with('errors', $errors);
    }
}
