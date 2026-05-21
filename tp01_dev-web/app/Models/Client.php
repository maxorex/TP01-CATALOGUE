<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    protected $fillable = [
        'name',
        'first_name',
        'email',
        'password',
        'role',
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

    public function orders()
    {
        return $this->hasMany(Order::class, 'client_id');
    }
}
