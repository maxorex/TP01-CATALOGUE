<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => 'required|email|max:255|unique:clients',
            'name' => 'required|min:2|max:30',
            'firstname' => 'required|min:2|max:30',
            'password' => 'required|min:8|confirmed',
            'address' => 'required|min:5|max:100',
            'city' => 'required|min:3|max:30',
            'postal_code' => 'required|regex:/^[A-Za-z]\d[A-Za-z] ?\d[A-Za-z]\d$/',
            'province' => 'required|size:2|in:QC,ON,NS,NB,MB,BC,PE,SK,AB,NL,NT,YT,NU',
            'phone' => 'nullable|regex:/^\d{3}-\d{3}-\d{4}$/',

        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Le nom est requis',
            'name.min' => 'Le nom doit faire au moins 2 caractères',
            'name.max' => 'Le nom ne doit pas dépasser 30 caractères',
            'email.required' => 'L\'email est requis',
            'email.max' => 'L\'email ne doit pas dépasser 255 caractères',
            'email.email' => 'L\'email doit être une adresse email valide',
            'email.unique' => 'Cet email est déjà utilisé',
            'password.required' => 'Le mot de passe est requis',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractères',
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas',
        ];
    }
}