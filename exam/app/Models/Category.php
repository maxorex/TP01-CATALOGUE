<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function channels()
    {
        return $this->hasMany(Channel::class);
    }    
    public $timestamps = false;
}
