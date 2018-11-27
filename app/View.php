<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Property;

class View extends Model
{
    public function properties (){

    	return $this -> hasMany(Property::class);
    }

    public function user (){

    	return $this -> hasMany(User::class);
    }
}
