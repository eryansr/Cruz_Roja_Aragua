<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Voluntario extends Model
{
	use softDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = ['estado_id', 'ciudad_id', 'municipio_id', 'parroquia_id', 'nombre', 'apellido', 'cedula', 'pasaporte', 'edad', 'nacimiento', 'sanguineo_id', 'instruccion_id', 'profesion_id', 'ocupacion_id', 'habitacion', 'tel_movil', 'tel_fijo', 'tel_emergencia', 'email', 'alergia', 'trabajo', 'tel_trabajo', 'boys', 'girls', 'discapacidad', 'altura', 'peso', 'talla_franela', 'talla_pantalon', 'talla_calzado', 'experiencia', 'labores', 'hobbies', 'cruz_roja', 'conocimiento', 'tiempo', 'cronica', 'seguridad'];

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

	public function donantes()
	{
    	return $this->belongsToMany(Donante::class);
	}

	public function hijos()
	{
    	return $this->belongsToMany(Hijo::class);
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

	public function sanguineos()
	{
    	return $this->belongsTo(Sanguineo::class,'sanguineo_id');
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
}
