<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prorgression extends Model
{
    protected $fillable = [
        'user_id',
        'formation_id',
        'tauxCompletion',
        'dernierAcces'
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
