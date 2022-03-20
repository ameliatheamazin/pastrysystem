<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB; //to import the database 
use App\Models\Order;
use App\Models\Products_Order;
class Products_OrderController extends Controller
{
    public function addOrderProd(Request $req){

        if ($req->session()->has('order'))
        {
            $order=Session::get('order');
            // var_dump($order->getAttributes());
            $id=$order->getAttributes()['id'];
            $productOrder=new Products_Order;
            $productOrder->order_id=$id;
            $cart=Session::get('cart');
            foreach($cart->items as $item){
                $productOrder->product_id=$item['id'];
                $productOrder->quantity=$item['qty'];
                $productOrder->save();
            }
            dd('done');

            // $req->session()->forget('cart');
        }
        
    }
}