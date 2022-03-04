<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Model\Order;
use App\Model\Product;

class Products_Order extends Model
{
    use HasFactory, Notifiable;
    //public $timestampe=false;

    //composite key for order and product
    protected $fillable = [
        'product_id',
        'order_id',
        'quantity',
    ];

    //each item belongs to 1 product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    //each item belongs to 1 order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}