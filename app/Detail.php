<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Property;

class Detail extends Model
{
	protected $fillable = [
        'name', 'property_id'
    ];

    public function properties (){

    	return $this -> belongsTo(Property::class);
    }
}
