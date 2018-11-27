<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Negotiation;
use App\Housingtype;
use App\Propertytype;
use App\View;
use App\User;
use App\Division;
use App\City;
use App\Detail;
use App\Equipments;
use App\Photo;

class Property extends Model
{
     protected $fillable = [
        'habs', 'bath', 'address', 'number', 'cp', 'area', 'antiquity', 'floor', 'description', 'user_id', 'price', 'negotiation_id', 'housingtype_id', 'propertytype_id', 'equipment_id', 'city_id'
    ];

    protected $casts = [
        'status'=>'boolean',
        'price'=>'float',
        'habs'=>'float',
        'bath'=>'float',
        'area'=>'float',
        'cp'=>'float',
        'number'=>'float'
    ];

    public function negotiation()
    {
    	return $this -> belongsTo(Negotiation::class);
    }

    public function housingtype()
    {
    	return $this -> belongsTo(Housingtype::class);
    }

    public function propertytype()
    {
        return $this -> belongsTo(Propertytype::class);
    }

    public function user()
    {
    	return $this -> belongsTo(User::class);
    }

    public function view()
    {
        return $this -> belongsToMany(View::class);
    }

    public function division()
    {
        return $this -> hasMany(Division::class);
    }

    public function city()
    {
        return $this -> belongsTo(City::class);
    }

    public function detail()
    {
        return $this -> hasMany(Detail::class);
    }

    public function equipment()
    {
        return $this -> belongsTo(Equipments::class);
    }

    public function photos()
    {
        return $this -> belongsTo(Photo::class);
    }

    /*public function getQuantityAttribute(){
        return $this -> price;
    }*/
}
