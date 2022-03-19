<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products_Order extends Model
{
    use HasFactory;
    protected $table = 'Products_Orders';
    protected $primaryKey = 'product_id';
}