<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function addtocart($id){
        
        $product = \App\Models\Product::all()->where("id", "=",$id)->first();
       
        $cart = session()->get('cart');
        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                    ]
            ];
            session()->put('cart', $cart);
        }
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back();
        }  
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
        ];
        session()->put('cart', $cart);
        return redirect()->back();

    }
    public function oderering(){

        session()->put();
    }
}


