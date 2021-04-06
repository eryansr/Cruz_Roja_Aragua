<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sanguineo extends Model
{
    public function voluntario()
    {
    	return $this->hasMany(Voluntario::class);
    }
}
