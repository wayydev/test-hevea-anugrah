<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlantRequest extends FormRequest
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
            'berat_basah' => 'required',
            'drc' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'berat_basah.required' => 'Berat basah tidak boleh kosong',
            'drc.required' => 'DRC tidak boleh kosong',
        ];
    }
}
