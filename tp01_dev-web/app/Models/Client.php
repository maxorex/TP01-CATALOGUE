<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    protected $fillable = [
        'name',
        'firstname',
        'email',
        'password',
        'address',
        'city',
        'postal_code',
        'province',
        'phone',
    ];
    protected $hidden = [
        'password',
        'remember_token'
    ];
}
