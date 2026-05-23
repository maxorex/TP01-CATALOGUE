<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'price' => 'required|numeric', // check pour decimal
            'stock' => 'required|integer',
            'category_id' => 'required',
            'image' => 'nullable|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Le nom est requis',
            'name.max' => 'Le nom ne doit pas dépasser 255 caractères',
            'description.max' => 'La description ne doit pas dépasser 255 caractères',
            'price.required' => 'Le prix est requis',
            'price.numeric' => 'Le prix doit avoir un nombre décimal',
            'stock.required' => 'Le stock est requis',
            'stock.integer' => 'Le stock doit etre un nombre',
            'category_id.required' => 'La catégorie est requise',
        ];
    }
}
