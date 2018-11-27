<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Property;

class Photo extends Model
{
    protected $fillable = [
        'img', 'property_id', 'division'
    ];

    public function property()
    {
        return $this -> belongsTo(Property::class);
    }
}
