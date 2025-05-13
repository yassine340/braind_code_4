<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Formation;

class Payment extends Model
{
    protected $fillable = [
        'user_id', 
        'formation_id',
        'amount', 
        'pays',
        'ville',
        'adresse',
        'code_postal',
        'payment_method',
        'paypal_order_id',
        'paypal_capture_id',
        'currency', 
        'stripe_payment_intent_id', 
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }
}