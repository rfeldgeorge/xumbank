<?php

namespace App\Models;

use App\Models\Role;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'name',  'lname', 'email', 'password', 'creator_id', 'phone','security_phrase',
        'token'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_users');
    }

    public function account()
    {
        return $this->hasOne('App\Account', 'user_id');
    }

    public function profile()
    {
        return $this->hasOne('App\Profile', 'user_id');
    }




    public function hasRole($role)
    {
        if($this->roles()->where('name', $role)->first()){
            return true;
        }
        return false;
    }
}
