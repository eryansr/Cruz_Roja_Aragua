<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Civil extends Model
{
    public function censo()
    {
    	return $this->hasMany(Censo::class);
    }
}
