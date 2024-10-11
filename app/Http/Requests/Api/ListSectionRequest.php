<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
// use Illuminate\Support\Facades\Auth;

class ListSectionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return Auth::check();
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
            'classe_id' => [
                'required',
                'exists:classes,id'
            ],
        ];
    }
}
