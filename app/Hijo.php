<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hijo extends Model
{
    public function voluntario()
    {
    	return $this->hasMany(Voluntario::class);
    }
}
