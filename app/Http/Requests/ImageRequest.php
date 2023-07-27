<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //!creo le regola per la validazione del form
            'author' => 'required',
            'title' => 'required',
            'content' => 'required'
        ];
    }

    public function messages(){
        return [
            'author' => 'Autore è un campo obbligatorio',
            'title' => 'Titolo è un campo obbligatorio',
            'content' => 'Testo del messaggio è un campo obbligatorio'
        ];
    }
}
