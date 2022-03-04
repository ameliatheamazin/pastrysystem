<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Model\User;
use App\Model\Products_Order;

class Order extends Model
{
    use HasFactory, Notifiable;
    //public $timestampe=false;

    //composite key for order and product
    protected $fillable = [
        'user_id',
        'total_price',
        'delivery_address',
        'status'
    ];

    //1 order only have 1 customer
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //1 order has many items
    public function orderItems()
    {
        return $this->hasMany(Products_Order::class);
    }
}