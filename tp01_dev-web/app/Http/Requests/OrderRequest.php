<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'state' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'state.required' => 'Le statut de la commande est requis',
        ];
    }
}
