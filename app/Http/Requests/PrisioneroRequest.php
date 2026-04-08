<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class PrisioneroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // cambia a verdadero para permitir la peticion
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre_prisionero' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'fecha_ingreso' => 'required|date',
            'delito_cometido' => 'required|string|max:255',
            'celda_asignada' => 'required|string|max:255'

        ];
    }
}
