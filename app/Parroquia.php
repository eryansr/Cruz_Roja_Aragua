<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    public function censo()
    {
    	return $this->hasMany(Censo::class);
    }

    public function voluntario()
    {
    	return $this->hasMany(Voluntario::class);
    }
}
