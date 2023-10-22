<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'date_admission' => 'required|date',
            'area' => 'required|string|max:255',
            'position_id' => 'required|exists:positions,id',
            'locker' => 'required|string|max:5|unique:employees'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es obligatorio.',
            'name.string' => 'El campo nombre debe ser una cadena de texto.',
            'name.max' => 'El campo nombre no puede tener más de :max caracteres.',
            'last_name.required' => 'El campo apellido es obligatorio.',
            'last_name.string' => 'El campo apellido debe ser una cadena de texto.',
            'last_name.max' => 'El campo apellido no puede tener más de :max caracteres.',
            'age.required' => 'El campo edad es obligatorio.',
            'age.integer' => 'El campo edad debe ser un número entero.',
            'age.min' => 'El campo edad debe ser como mínimo :min.',
            'date_admission.required' => 'El campo fecha de admisión es obligatorio.',
            'date_admission.date' => 'El campo fecha de admisión debe ser una fecha válida.',
            'area.required' => 'El campo área es obligatorio.',
            'area.string' => 'El campo área debe ser una cadena de texto.',
            'area.max' => 'El campo área no puede tener más de :max caracteres.',
            'position_id.required' => 'El campo posición es obligatorio.',
            'position_id.exists' => 'La posición seleccionada no es válida.',
            'locker.required' => 'El campo locker es obligatorio.',
            'locker.string' => 'El campo locker debe ser una cadena de texto.',
            'locker.max' => 'El campo locker no puede tener más de :max caracteres.',
            'locker.unique' => 'El locker ya ha sido registrado.'
        ];
    }
}
