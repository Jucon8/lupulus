<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAdminRequest extends FormRequest
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
            'username'    => 'min:4|max:120|required',
            'email'       => 'min:5|max:250|required|email:rfc,dns|unique:users',
            'password'    => 'min:6|max:120|required',
            'rol_id'      => 'required'
        ];
    }
}
