<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'email' => 'required|email|max:255',
            'password_confirmed' => 'sometimes|same:password',
            'first_name' => 'max:255',
            'last_name' => 'max:255',
        ];
    }

    public function messages()
    {
        return [
            'password_confirmed.same' => 'Password did not match.',
        ];
    }
}
