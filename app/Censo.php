<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Censo extends Model
{
    use softDeletes;
    protected $dates = ['deleted_at'];

	protected $fillable = [
        'encuestador', 'organizacion', 'cedula', 'nombre', 'apellido', 'lugar', 'fecha', 'telefono', 'edad', 'direccion', 'instruccion_id', 'ocupacion_id', 'profesion_id', 'estado_id', 'ciudad_id', 'municipio_id', 'parroquia_id', 'piso', 'techo', 'habitacion', 'wc', 'agua', 'rio', 'vertedero', 'industria', 'terreno', 'cria', 'ingresos_familiar', 'ingresos_adicional', 'otros_ingresos', 'observaciones1', 'observaciones2', 'ocupacion_id', 'profesion_id'
    ];

    public function nacionalidads()
    {
        return $this->belongsToMany(Nacionalidad::class);
    }
    public function sexos()
    {
        return $this->belongsToMany(Sexo::class);
    }

    public function civils()
    {
        return $this->belongsToMany(Civil::class);
    }

    public function familias()
    {
        return $this->hasMany(Familia::class, 'censo_id');
    }

    public function viviendas()
    {
        return $this->belongsToMany(Vivienda::class);
    }

    public function consumos()
    {
    	return $this->belongsToMany(Consumo::class);
    }

    public function saluds()
    {
        return $this->belongsToMany(Salud::class);
    }

    public function blancas()
    {
        return $this->belongsToMany(Blanca::class);
    }

    public function basuras()
    {
        return $this->belongsToMany(Basura::class);
    }

    public function almacenamientos()
    {
        return $this->belongsToMany(Almacenamiento::class);
    }

    public function preparacions()
    {
        return $this->belongsToMany(Preparacion::class);
    }

    public function servidas()
    {
        return $this->belongsToMany(Servida::class);
    }

    public function manipulacions()
    {
        return $this->belongsToMany(Manipulacion::class);
    }

    public function mascotas()
    {
        return $this->belongsToMany(Mascota::class);
    }

    public function asociadas()
    {
        return $this->belongsToMany(Asociada::class);
    }

    public function recreacions()
    {
        return $this->belongsToMany(Recreacion::class);
    }

    public function estados()
    {
        return $this->belongsTo(Estado::class,'estado_id');
    }

    public function ciudads()
    {
        return $this->belongsTo(Ciudad::class, 'ciudad_id');
    }

    public function municipios()
    {
        return $this->belongsTo(Municipio::class, 'municipio_id');
    }

    public function parroquias()
    {
        return $this->belongsTo(Parroquia::class, 'parroquia_id');
    }

    public function ocupacions()
    {
        return $this->belongsTo(Ocupacion::class,'ocupacion_id');
    }

    public function profesions()
    {
        return $this->belongsTo(Profesion::class,'profesion_id');
    }

    public function instruccions()
    {
        return $this->belongsTo(Instruccion::class,'instruccion_id');
    }
}
