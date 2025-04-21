<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => ['email', 'required'],
            'password' => ['required']
        ];
    }

    public function messages(): array {
        return [
            'required' => 'Este campo é obrigatório',
            'email' => 'Este campo deve ser em formato de email'
        ];
    }
    public function withValidator($validator): void{
        $validator->after(function ($validator) {
           $attempt = Auth::attempt([
              'email' => $this->email,
              'password' => $this->password
           ]);

           if (!$attempt){
               $validator->errors()->add('email', 'Credenciais inválidas');
           }
        });
    }

}
