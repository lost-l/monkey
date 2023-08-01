<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
        if ($this->method() == 'PUT') {
            return [
                'nombre' => 'required',
                'apellido' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'tipo_id' => 'required|exists:document_types,id'
            ];
        }
        return [
            'nombre' => 'sometimes|required',
            'apellido' => 'sometimes|required',
            'email' => 'sometimes|required|email',
            'password' => 'sometimes|required',
            'tipo_id' => 'sometimes|required|exists:document_types,id'
        ];
    }

    protected function prepareForValidation()
    {
        if ($this->has('nombre')) {
            $this->merge(['name' => $this->nombre]);
        } else if ($this->has('apellido')) {
            $this->merge(['surname' => $this->apellido]);
        } else if ($this->has('tipo_id')) {
            $this->merge(['document_type_id' => $this->tipo_id]);
        }
    }
}
