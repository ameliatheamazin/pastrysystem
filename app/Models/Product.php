<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Order;

class Product extends Model
{
    use HasFactory;

    public function order(){
        return $this->belongTo(Order::class);
    }
}