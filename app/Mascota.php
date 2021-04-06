<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    public function censo()
    {
    	return $this->hasMany(Censo::class);
    }
}
