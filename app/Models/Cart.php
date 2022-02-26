<?php

namespace App\Models;

class Cart
{
    public $items=null; 
    public $totalQty=0;
    public $totalPrice=0;

    //constructor for the cart
    public function __construct($oldCart){
        if($oldCart){
            $this->items=$oldCart->items;
            $this->totalQty=$oldCart->totalQty;
            $this->totalPrice=$oldCart->totalPrice;
        }
    }

    //to add a new item to the cart pass in the product and its id
    public function add($item, $id){
        //storedItem will keep the group of item and its related info
        $storedItem=['qty'=>0,'price'=>$item->price,'item'=>$item,'id'=>$id];
        
        if($this->items){
            //check if item alrd exists in the cart, if yes then assign the item
            if(array_key_exists($id,$this->items)){
                $storedItem=$this->items[$id];
            }
        }
        
		$storedItem['qty']++;
		$storedItem['price'] = $item->price * $storedItem['qty'];
		$this->items[$id] = $storedItem;
		$this->totalQty++;
		$this->totalPrice += $item->price;
        // var_dump($this->items);
    }

}