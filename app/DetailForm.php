<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class DetailForm extends Model
{
    protected $fillable = [
        'name', 'email-agent', 'phone', 'emailcontact', 'user_id', 'message'
    ];

    public function user()
    {
    	return $this -> belongsTo(User::class);
    }
}
