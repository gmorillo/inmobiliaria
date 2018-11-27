<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Property;

class Equipments extends Model
{
    public function properties (){

    	return $this -> belongsTo(Property::class);
    }
}
