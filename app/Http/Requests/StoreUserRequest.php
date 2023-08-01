<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'tipo_id' => 'required|exists:document_types,id'
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'name' => $this->nombre,
            'surname' => $this->apellido,
            'document_type_id' => $this->tipo_id,
        ]);
    }
}
