<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
        public function comments()
    {
        return $this->hasMany(Comment::class);
    }    
    public $timestamps = false;
}
