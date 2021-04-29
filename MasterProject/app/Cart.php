<?php

namespace App;


class Cart
{
//
//    public $items = null;
//    public $totalQty = 0;
//    public $totalPrice = 0;
//
//    function __Construct($oldCart, $items, $totalQty, $totalPrice)
//    {
//        if ($oldCart) {
//            $this->items = $oldCart->$items;
//            $this->$totalQty = $oldCart->$totalQty;
//            $this->$totalPrice = $oldCart->$totalPrice;
//        }
//
//    }
//
//    public function add($item, $id)
//    {
//        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
//        if ($this->items) {
//            if (array_key_exists($id, $this->items)) {
//                $storedItem = $this->items[$id];
//            }
//        }
//        $storedItem['qty']++;
//        $storedItem['price'] = $item->price * $storedItem['qty'];
//        $this->items[$id] = $storedItem;
//        $this->totalQty++;
//        $this->totalPrice += $item->price;
//    }
//
//public $items = [];
//public $totalQty;
//public $totalPrice;
//
//public function __Construct( $cart = null) {
//    if($cart) {
//        $this->items = $cart->items;
//        $this->totalQty = $cart->totalQty;
//        $this->totalPrice = $cart->totalPrice;
//    }
//    else {
//        $this->items = [];
//        $this->totalQty = 0;
//        $this->totalPrice = 0;
//    }
//  }
//
//public function add($product) {
//    $item = [
//        'id' => $product->id,
//        'name' => $product->name,
//        'price' => $product->price,
//        'qty' => 0,
//        'image' => $product->image,
//        'color' => $product->color,
//        'size' => $product->size
//    ];
//
//    if( !array_key_exists($product->id , $this->items)) {
//        $this->items[$product->id] = $item;
//        $this->totalQty +=1;
//        $this->totalPrice += $product->price;
//    }
//    else {
//        $this->totalQty +=1;
//        $this->totalPrice += $product->price;
//    }
//    $this->items[$product->id]['qty'] +=1;
//}


    public $items = [];
    public $totalQty;
    public $totalPrice;

    public function __Construct( $cart = null) {
        if($cart) {
            $this->items = $cart->items;
            $this->totalQty = $cart->totalQty;
            $this->totalPrice = $cart->totalPrice;
        }
        else {
            $this->items = [];
            $this->totalQty = 0;
            $this->totalPrice = 0;
        }
    }

    public function add($product) {
        $item = [
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'qty' => 0,
            'image' => $product->image,
            'color' => $product->color,
            'size' => $product->size
        ];

        if( !array_key_exists($product->id , $this->items)) {
            $this->items[$product->id] = $item;
            $this->totalQty +=1;
            $this->totalPrice += $product->price;
        }
        else {
            $this->totalQty =1;
            $this->totalPrice = $product->price;
        }
        $this->items[$product->id]['qty'] = 1;
    }

    public function remove($id) {
        if( array_key_exists($id, $this->items)) {
            $this->totalQty -= $this->items[$id]['qty'];
            $this->totalPrice -= $this->items[$id]['qty'] * $this->items[$id]['price'];
            unset($this->items[$id]);
        }
    }
}