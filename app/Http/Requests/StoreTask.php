<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTask extends FormRequest
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
            'titulo' => 'required|string|max:255|min:3',
            'slug'=> 'required|unique:tasks',
            'descripcion' => 'required|string',
            'completed' => 'required|boolean',
            'start_date' => 'required|date',
            'due_date' => 'required|date',
        ];
    }
}
