<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Model\Products_Order;

class Product extends Model
{
    use HasFactory, Notifiable;
    //public $timestampe=false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'price',
        'description',
        'image_file'
    ];

    //1 product can exist in many order item
    public function orderlist()
    {
        return $this->hasMany(Products_Order::class);
    }
}