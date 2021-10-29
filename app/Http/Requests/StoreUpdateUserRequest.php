<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'cpf' => 'required|formato_cpf',
            'email' => 'required|email:filter',
            'birth_date' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'cpf.formato_cpf' => 'The cpf field does not have a valid CPF format.',
        ];
    }

}
