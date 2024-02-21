<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRetraiteRequest extends FormRequest
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
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'date_de_naissance' => [
                'required',
                'date',
                function ($attribute, $value, $fail) {
                    // Vérifier si la date est au format 'YYYY-MM-DD'
                    if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $value)) {
                        $fail('Le format de la date de naissance est incorrect. Veuillez utiliser le format YYYY-MM-DD.');
                    }
                },
            ],
            'note' => 'required|string|max:255',
            'ems_id'=> 'required|integer',
        ];

    }
}
