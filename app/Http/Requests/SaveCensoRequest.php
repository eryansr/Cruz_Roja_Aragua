<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveCensoRequest extends FormRequest
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
            'encuestador' => 'required',
            'organizacion' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'lugar' => 'required',
            'fecha' => 'required',
            'telefono' => 'required',
            'edad' => 'required',
            'direccion' => 'required',
            'piso' => 'required',
            'techo' => 'required',
            'habitacion' => 'required',
            'wc' => 'required',
            'agua' => 'required',
            'rio' => 'required',
            'vertedero' => 'required',
            'industria' => 'required',
            'terreno' => 'required',
            'cria' => 'required',
            'ingresos_familiar' => 'required',
            'ingresos_adicional' => 'required',
            'otros_ingresos' => 'required',
            'observaciones1' => 'required',
            'observaciones2' => 'required',

            'nacionalidads' => 'required',
            'sexos' => 'required',
            'civils' => 'required',

            'saluds' => 'required',
            'consumos' => 'required',
            'blancas' => 'required',
            'basuras' => 'required',
            'almacenamientos' => 'required',
            'preparacions' => 'required',
            'servidas' => 'required',
            'manipulacions' => 'required',
            'mascotas' => 'required',
            'asociadas' => 'required',
            'recreacions' => 'required',

            'estado_id' => 'not_in:0',
            'ciudad_id' => 'not_in:0',
            'municipio_id' => 'not_in:0',
            'parroquia_id' => 'not_in:0',
            'profesion_id' => 'not_in:0',
            'ocupacion_id' => 'not_in:0',
            'instruccion_id' => 'not_in:0',

            'cedulaf' => 'max:8|unique:familias,cedulaf,'.$this->route('censo'),
            'cedulaf' => 'max:8|unique:censos,cedula,'.$this->route('censo'),
            'cedula' => 'required|max:8|unique:censos,cedula,'.$this->route('censo'),
            'cedula' => 'required|max:8|unique:familias,cedulaf,'.$this->route('censo'),
        ];
    }

    public function messages()
    {
        return [
            'cedula.unique' => 'Esta c??dula  ya ha sido registrada',
            'cedulaf.unique' => 'Esta c??dula ya ha sido registrada',

            'lugar.required' => 'Escriba su lugar de nacimiento',
            'fecha.required' => 'Indique fecha de nacimiento',

            'piso.required' => 'Rellene el campo Piso',
            'techo.required' => 'Rellene el campo Techo',
            'habitacion.required' => 'Rellene el campo Nro Hab.',
            'wc.required' => 'Rellene el campo Ba??os',
            'agua.required' => 'Rellene el campo Agua',
            'rio.required' => 'Rellene el campo R??o - Quebrada' ,
            'vertedero.required' => 'Rellene el campo Vertedero de Basura',
            'industria.required' => 'Rellene el campo Industrias - F??bricas',
            'terreno.required' => 'Rellene el campo Terreno Bald??o',
            'cria.required' => 'Rellene el campo Cr??a de Animales',
            'ingresos_familiar.required' => 'Rellene sus ingresos familiares',
            'ingresos_adicional.required' => 'Rellene sus ingresos adicionales',
            'otros_ingresos.required' => 'Rellene otros ingresos',

            'observaciones1.required' => 'Falta escribir observaciones (Debajo de la carga familiar)',
            'observaciones2.required' => 'Falta escribir observaciones (final del formulario)',
            'nacionalidads.required' => 'Seleccione una nacionalidad',
            'sexos.required' => 'Seleccione un sexo',
            'civils.required' => 'Seleccione un estado c??vil',

            'saluds.required' => 'Debes seleccionar al menos una opci??n en Centros de salud',
            'consumos.required' => 'Debes seleccionar al menos una opci??n en Agua consumo',
            'blancas.required' => 'Debes seleccionar al menos una opci??n en Agua Blanca',
            'basuras.required' => 'Debes seleccionar al menos una opci??n en Basura',
            'almacenamientos.required' => 'Debes seleccionar al menos una opci??n en Almacenamiento de agua',
            'preparacions.required' => 'Debes seleccionar al menos una opci??n en Preparaci??n de alimentos',
            'servidas.required' => 'Debes seleccionar al menos una opci??n en Aguas servidas',
            'manipulacions.required' => 'Debes seleccionar al menos una opci??n en Manipulaci??n de alimentos',
            'mascotas.required' => 'Debes seleccionar al menos una opci??n en Mascotas',
            'asociadas.required' => 'Debes seleccionar al menos una opci??n en Condiciones asociadas',
            'recreacions.required' => 'Debes seleccionar al menos una opci??n en Recreaci??n',

            'estado_id.not_in' => 'Opci??n inv??lida en Estado',
            'ciudad_id.not_in' => 'Opci??n inv??lida en Ciudad',
            'municipio_id.not_in' => 'Opci??n inv??lida en Municipio',
            'parroquia_id.not_in' => 'Opci??n inv??lida en Parroquia',
            'ocupacion_id.not_in' => 'Opci??n inv??lida en Ocupaci??n',
            'profesion_id.not_in' => 'Opci??n inv??lida en Profesi??n',
            'instruccion_id.not_in' => 'Opci??n inv??lida en Grado de instrucci??n',
        ];
    }
}
