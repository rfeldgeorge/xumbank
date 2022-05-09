<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address',
        'city',
        'state',
        'country',
        'mother_name',
        'dob',
        'occupation',
        'gender',
        'iscreated'
    ];

    public function user()
    {
        
        return $this->belongsTo('App\User');
    }
}
