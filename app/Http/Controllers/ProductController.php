<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //to import the database 
use App\Models\Product;
use App\Models\Cart;

class ProductController extends Controller
{
    public function index(){
        $products=Product::get();

        $cart=session()->get('cart');

        if($cart==null)
            $cart=[];

        return view('user/home')->with('products',$products)->with('cart',$cart);
    }

    public function addToCart(Request $request,$id)
    {
        $product=Product::find($id);
        $oldCart=$request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart=new Cart($oldCart);

        $cart->add($product,$product->id);

        $request->session()->put('cart', $cart);
        // $request->session()->flush('cart');
        // dd($request->session()->get('cart'));
        return redirect('/');
    }
    
    public function showProd(){

        $allProd= Product::all(); //use a parameter to contain the data
        return view('user/home',['products'=>$allProd]);
    }

    public function showCart(){
        //if no previous cart straight away go to page
        if(!Session()->has('cart'))
        {
            return view('user/cart',['cartList'=>null,'totalPrice'=>0]);
        } 
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);       
        return view('user/cart',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice]);
    }

    public function addQty(Request $request, $id){
        $oldCart=$request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->addQty($id);

        $request->session()->put('cart', $cart);
        return redirect('/cart');
    }
    
    public function deductQty(Request $request, $id){
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->deductQty($id);

        if (count($cart->items) > 0) {
            $request->session()->put('cart', $cart);
        } 
        else{
            $request->session()->forget('cart');
        }
        return redirect('/cart');

    }


    public function orderPaid(Request $req){
        if ($req->session()->has('cart'))
        {
            $req->session()->forget('cart');
        }
        return redirect('/');
    }
}