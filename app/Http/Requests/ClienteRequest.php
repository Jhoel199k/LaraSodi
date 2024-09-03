<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
			'codigo' => 'required|string',
			'cliente' => 'required|string',
			'nit_ci' => 'string',
			'razon_social' => 'string',
			'descripcion' => 'string',
			'ciudad' => 'string',
			'zona' => 'string',
			'vendedor' => 'string',
			'correo_sin' => 'string',
        ];
    }
}
