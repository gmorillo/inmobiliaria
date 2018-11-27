<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Property;

class City extends Model
{
    protected $fillable = [
    	'name'
    ]; 

    public function properties (){

    	return $this -> hasMany(Property::class);
    }
}
