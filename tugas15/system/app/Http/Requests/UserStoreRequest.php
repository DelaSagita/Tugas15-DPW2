<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'nama' => 'required',
            'username' => 'required|unique:user,username',
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
            'no_handphone' => 'required',
            'level' => 'required'
        ];
    }

    function messages(){
        return[
            'nama.required' => 'Field nama wajib diisi',
            'username.required' => 'Field username wajib diisi',
            'username.unique' => 'Username tersebut sudah terdaftar',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password wajib diisi',
            'no_handphone.required' => 'No hp wajib diisi',
            'level.required' => 'Level wajib diisi'
        ];
    }
}