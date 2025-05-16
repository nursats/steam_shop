<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = ['user_id', 'knife_id', 'quantity'];

    public function knife()
    {
        return $this->belongsTo(Knife::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
