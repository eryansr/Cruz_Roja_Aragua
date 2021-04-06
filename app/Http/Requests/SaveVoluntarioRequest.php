<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveVoluntarioRequest extends FormRequest
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
            'cedula' => 'required|max:8|unique:voluntarios,cedula,'.$this->route('voluntario'),
            'edad' => 'required',
            'nacimiento' => 'required',

            'civils' => 'required',
            'nacionalidads' => 'required',
            'sexos' => 'required',
            'donantes' => 'required',
            'hijos' => 'required',

            'sanguineo_id' => 'not_in:0',
            'instruccion_id' => 'not_in:0',
            'profesion_id' => 'not_in:0',
            'ocupacion_id' => 'not_in:0',

            'habitacion' => 'required',
            'tel_movil' => 'required',
            'tel_fijo' => 'required',
            'tel_emergencia' => 'required',
            'email' => 'required|unique:voluntarios,email,'.$this->route('voluntario'),
            'alergia' => 'required',
            'trabajo' => 'required',
            'tel_trabajo' => 'required',
            'altura' => 'required',
            'peso' => 'required',
            'talla_franela' => 'required',
            'talla_pantalon' => 'required',
            'talla_calzado' => 'required',
            'labores' => 'required',
            'hobbies' => 'required',
            'cruz_roja' => 'required',
            'conocimiento' => 'required',
            'tiempo' => 'required',

            'estado_id' => 'not_in:0',
            'ciudad_id' => 'not_in:0',
            'municipio_id' => 'not_in:0',
            'parroquia_id' => 'not_in:0',

            'pasaporte' => '',
            'discapacidad' => '',
            'experiencia' => '',
            'boys' => '',
            'girls' => '',
            'cronica' => '',
            'seguridad' => '',
        ];
    }
    public function messages()
    {
        return [
            'cedula.unique' => 'Esta cédula ya ha sido registrada',

            'nacimiento.required' => 'El campo fecha de nacimiento es obligatorio',
            'civils.required' => 'Marque un estado cívil',
            'nacionalidads.required' => 'Marque una nacionalidad',
            'sexos.required' => 'Seleccione un sexo',
            'donantes.required' => '¿Es ud. donante si o no?',
            'hijos.required' => '¿Tiene hijos si o no?',

            'sanguineo_id.not_in:0' => 'Debe seleccionar un grupo sanguineo',
            'instruccion_id.not_in:0' => 'Debe seleccionar un grado de instrucción',
            'profesion_id.not_in:0' => 'Debe seleccionar una profesión',
            'ocupacion_id.not_in:0' => 'Debe seleccionar una ocupación',

            'habitacion.required' => 'El campo dirección de habitacion es obligatorio',
            'tel_movil.required' => 'El campo teléfono móvil es obligatorio',
            'tel_fijo.required' => 'El campo teléfono fijo es obligatorio',
            'tel_emergencia.required' => 'El campo teléfono de emergencia es obligatorio',
            'email.required' => 'El campo correo electrónico es obligatorio',
            'trabajo.required' => 'El campo dirección de trabajo es obligatorio',
            'tel_trabajo.required' => 'El campo teléfono de trabajo es obligatorio',
            'talla_franela.required' => 'El campo talla de franela es obligatorio',
            'talla_pantalon.required' => 'El campo talla de pantalón es obligatorio',
            'talla_calzado.required' => 'El campo talla de calzado es obligatorio',
            'labores.required' => 'Necesito esta pregunta respondida',
            'hobbies.required' => 'Necesito esta pregunta respondida',
            'cruz_roja.required' => 'Necesito esta pregunta respondida',
            'conocimiento.required' => 'Necesito esta pregunta respondida',
            'tiempo.required' => 'Necesito saber su tiempo libre',

            'estado_id.not_in' => 'Opción inválida en Estado',
            'ciudad_id.not_in' => 'Opción inválida en Ciudad',
            'municipio_id.not_in' => 'Opción inválida en Municipio',
            'parroquia_id.not_in' => 'Opción inválida en Parroquia',
        ];
    }
}
