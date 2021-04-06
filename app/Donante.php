<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donante extends Model
{
    public function voluntario()
    {
    	return $this->hasMany(Voluntario::class);
    }
}
