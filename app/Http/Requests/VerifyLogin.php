<?php

namespace App\Http\Requests;

use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class VerifyLogin extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|exists:users,name',
            'password' => [
                'required',
                'string',
                function ($attribute, $value, $fail) {
                    $user = \App\Models\User::where('name', $this->input('name'))->first();

                    if (!$user || !Hash::check($value, $user->password)) {
                        $fail('Usuário ou senha incorreto(s)');
                    }
                }
            ],
        ];
    }
}
