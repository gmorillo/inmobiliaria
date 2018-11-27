<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use \Illuminate\Support\Collection;
use \App\Notifications\ResetPasswordNotification;
use Illuminate\Support\Facades\Log;
use App\Property;
use App\Views;

class User extends Authenticatable
{
    use Notifiable;
    protected $dateFormat = 'Y-m-d H:i:s.000';
    protected $appends = ['totalProperties','totalVisit', 'totalContact'];

    /**
     * @param string $token
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token, $this));
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone', 'password', 'dni'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * @param String $url
     * @return bool
     */
    public function hasPermissionForUrl(String $url)
    {
        foreach ($this->roles as $role) {
            if ($role->hasPermissionForUrl($url)) return true;
        }
        return false;
    }

    /**
     * @param $roles string | array
     * @return bool
     */
    public function hasRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                foreach ($this->roles as $r) {
                    if ($r->name == $role) return true;
                };
            }
        } elseif (is_string($roles)) {
            foreach ($this->roles as $r) {
                if ($r->name == $roles) return true;
            };
        }
        return false;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getRoleCompaniesAttribute()
    {
        $relation = new Collection();
        foreach ($this->roles as $role) {
            $relation->push($role->companies);
        }
        return $relation->flatten(1);
    }

    /**
     * @param $permissions
     * @return bool
     */
    public function hasPermission($permissions)
    {
        if ($this->hasRole('super')) return true;
        if (is_array($permissions)) {
            foreach ($permissions as $permission) {
                foreach ($this->roles as $role) {
                    if ($role->hasModule($permission)) return true;
                }
            }
        } elseif (is_string($permissions)) {
            foreach ($this->roles as $role) {
                if ($role->hasModule($permissions)) return true;
            }
        }
        return false;
    }

    /**
     * @param bool $status
     * @return bool
     */
    public function setLogged(bool $status)
    {
        $this->fill(['logged' => $status]);
        return $this->save();

    }

    public function properties (){

        return $this -> hasMany(Property::class);
    }

    public function user (){

        return $this -> hasMany(DetailForm::class);
    }

    public function view (){

        return $this -> belongsToMany(View::class);
    }

    public function getTotalpropertiesAttribute () {

        return Property::with(['user'])->where('status',1)->where('user_id', $this->id)->count();
    }

    public function getTotalvisitAttribute () {

        return View::with(['user'])->where('user_id',$this->id)->sum('views');
    }

    public function getTotalcontactAttribute () {

        return DetailForm::with(['user'])->where('user_id',$this->id)->count();
    }

    
}



