<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
          'fname' => 'required|string|max:255',
          'lname' => 'required|string|max:255',
          'phone' => 'required|string|max:255',
          'address' => 'required|string|max:255',
          'city' => 'required|string|max:255',
          'email' => 'required|email|max:255|unique:customers',
          'password' =>'required|string|min:8|confirmed|'
        ];

    }
}
