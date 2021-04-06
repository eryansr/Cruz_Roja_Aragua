<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveHistoriaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'apellido' => 'required',
            'cedula' => 'required|max:8|unique:historias,cedula,'.$this->route('historia'),
            'edad' => 'required',
            'habitacion' => 'required',
            'nacimiento' => 'required',

            'sanguineo_id' => 'not_in:0',

            'tel_movil' => 'required',
            'tel_fijo' => 'required',
            'tel_emergencia' => 'required',
            'email' => 'required',
            'alergia' => 'required',
            'trabajo' => 'required',
            'tel_trabajo' => 'required',
            'altura' => 'required',
            'peso' => 'required',
            'discapacidad' => '',
            'observaciones1' => 'required',

            'nombree' => 'required',
            'apellidoe' => 'required',
            'especializacion' => 'required',
            'consulta' => 'required',
            'observaciones2' => 'required',
        ];
    }
     public function messages()
    {
        return [
            'cedula.required' => 'El campo cédula es obligatorio',
            'cedula.unique' => 'Esta cédula ya ha sido registrada',

            'habitacion.required' => 'El campo dirección de habitacion es obligatorio',
            'nacimiento.required' => 'El campo fecha de nacimiento es obligatorio',

            'sanguineo_id.not_in:0' => 'Debe seleccionar un grupo sanguineo',

            'tel_movil.required' => 'El campo teléfono móvil es obligatorio',
            'tel_fijo.required' => 'El campo teléfono fijo es obligatorio',
            'tel_emergencia.required' => 'El campo teléfono de emergencia es obligatorio',
            'email.required' => 'El campo correo electrónico es obligatorio',
            'trabajo.required' => 'El campo dirección de trabajo es obligatorio',
            'tel_trabajo.required' => 'El campo teléfono de trabajo es obligatorio',
            'observaciones1.required' => 'Llene la caja de observaciones del paciente',
            'nombree.required' => 'El campo nombre del especialista  es obligatorio',
            'apellidoe.required' => 'El campo apellido del especialista es obligatorio',
            'especializacion.required' => 'Llene la caja de observaciones del paciente',
            'consulta.required' => 'Llene la caja de observaciones del paciente',
            'observaciones2.required' => 'Llene la caja de observaciones del paciente',
        ];
    }
}
