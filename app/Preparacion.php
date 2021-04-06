<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preparacion extends Model
{
    public function censo()
    {
    	return $this->hasMany(Censo::class);
    }
}
