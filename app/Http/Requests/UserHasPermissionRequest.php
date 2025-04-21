<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserHasPermissionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'permission' => ['required']
        ];
    }
}
