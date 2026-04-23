<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'client_id',
        'total_amount',
        'payment_status',
        'state',
        'delivery_date',
        'stripe_payment_intent_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

}
