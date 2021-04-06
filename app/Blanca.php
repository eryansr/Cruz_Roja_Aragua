<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blanca extends Model
{
    public function censo()
    {
    	return $this->hasMany(Censo::class);
    }
}
