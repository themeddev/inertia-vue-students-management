<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return auth()->check();
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:students,email'],
            'classe_id' => ['required', 'exists:classes,id'],
            'section_id' => ['required', 'exists:sections,id'],
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'name',
            'email' => 'email',
            'classe_id' => 'classe',
            'section_id' => 'section',
        ];
    }
}