<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddEventsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'date' => 'required',
            'capacity' => 'required|integer|min:1',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O nome da série é obrigatório.',
            'description.required' => 'Uma descrição do evento é obrigatória.',
            'location.required' => 'Um local para o evento é obrigatório.',
            'date.required' => 'Uma data para o evento é obrigatória.',
            'capacity.required' => 'A capacidade do evento é obrigatória.',
        ];
    }
}
