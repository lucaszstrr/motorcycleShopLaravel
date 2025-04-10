<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        "userId",
    ];

    protected $table = "cart";

    public function user(){
        return $this->belongsTo(User::class, 'userId');
    }

    public function cartItems(){
        return $this->hasMany(CartItem::class, 'cartId');
    }
}
