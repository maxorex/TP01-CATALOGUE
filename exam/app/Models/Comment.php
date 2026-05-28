<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }
    public $timestamps = false;
}
