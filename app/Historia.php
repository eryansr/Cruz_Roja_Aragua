<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Historia extends Model
{
	use softDeletes;
	protected $dates = ['deleted_at'];

    protected $fillable = ['nombre', 'apellido', 'cedula', 'edad', 'nacimiento', 'sanguineo_id', 'habitacion', 'tel_movil', 'tel_fijo', 'tel_emergencia', 'email', 'alergia', 'trabajo', 'tel_trabajo', 'discapacidad', 'altura', 'peso', 'observaciones1', 'nombree', 'apellidoe', 'especializacion', 'consulta', 'observaciones2'];

	public function sanguineos()
	{
    	return $this->belongsTo(Sanguineo::class,'sanguineo_id');
	}
}
