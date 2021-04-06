<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Familia extends Model
{
	use softDeletes;
	protected $dates = ['deleted_at'];

	protected $fillable = ['censo_id', 'cedulaf', 'nombref', 'apellidof', 'edadf', 'sexof', 'civilf', 'filiacion', 'instruccionf', 'ocupacionf', 'enfermedad'];

	public function censo()
	{
		return $this->belongsTo(Censo::class, 'id');
	}
}
