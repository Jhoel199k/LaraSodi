<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RutaRequest extends FormRequest
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
			'origen' => 'required|string',
			'destino' => 'required|string',
			'fecha_salida' => 'required',
			'fecha_llegada' => 'required',
			'rastreo_gps' => 'required|string',
        ];
    }
}
