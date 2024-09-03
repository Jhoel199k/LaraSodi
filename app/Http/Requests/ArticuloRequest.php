<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticuloRequest extends FormRequest
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
			'clasificador' => 'string',
			'codigo_interno' => 'string',
			'linea' => 'string',
			'descripcion' => 'string',
			'codigo_producto_sin' => 'string',
			'codigo_unidad' => 'string',
			'nombre_unidad' => 'string',
        ];
    }
}
