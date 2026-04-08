<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class VisitaRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fecha_hora_inicio_visita' => 'required|date',
            'fecha_hora_fin_visita' => 'required|date|after:fecha_hora_inicio_visita',
            'prisionero_id' => 'required|exists:prisioneros,id',
            'visitante_id' => 'required|exists:visitantes,id',
            'guardia_id' => 'required|exists:guardias,id',
        ];
    }
}
