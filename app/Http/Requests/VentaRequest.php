<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VentaRequest extends FormRequest
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
			'idsistema' => 'required',
			'estado' => 'required|string',
			'fechahora' => 'required',
			'tipo' => 'required|string',
			'nRO' => 'required|string',
			'totalventas' => 'required',
			'cliente' => 'required|string',
			'autorizacion' => 'required|string',
			'f' => 'string',
			'codigo_control' => 'required|string',
			'nit_cliente' => 'required|string',
			'e' => 'string',
			'registrador' => 'required|string',
			'linea' => 'string',
        ];
    }
}
