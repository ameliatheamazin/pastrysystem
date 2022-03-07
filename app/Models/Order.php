<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\User;

class Order extends Model
{
    use HasFactory, Notifiable;
    public $timestamps = false;

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
    public function orderlist()
    {
        return $this->belongsToMany(Product::class, 'products_orders')->withPivot('quantity');
    }
}