<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; 
    }

    public function rules(): array
    {
        return [
            'nombre' => 'required|string|max:150',
            'apellido' => 'nullable|string|max:100',
            'email' => 'nullable|email|max:150',
            'telefono' => 'nullable|string|max:20',
            'direccion' => 'required|string',
            'codigo_postal' => 'nullable|string|max:50',
            'plan_id' => 'required|exists:planes,id',
            'usuario_pppoe' => 'nullable|string|max:100',
            'password_pppoe' => 'nullable|string|max:100',
            'fecha_corte' => 'required|date',
            'fecha_instalacion' => 'nullable|date',
            'ultimo_pago' => 'nullable|date',
            'estado' => 'required|in:0,1',
        ];
    }

    // 🔥 Mensajes personalizados
    public function messages(): array
    {
        return [
            'nombre.required' => 'El nombre es obligatorio',
            'direccion.required' => 'La dirección es obligatoria',
            'plan_id.required' => 'Debe seleccionar un plan',
            'plan_id.exists' => 'El plan seleccionado no existe',
            'fecha_corte.required' => 'La fecha de corte es obligatoria',
            'email.email' => 'El correo no es válido',
        ];
    }
}