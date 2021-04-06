<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumo extends Model
{
    public function censo()
    {
    	return $this->hasMany(Censo::class);
    }
}
