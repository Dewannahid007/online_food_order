<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function cart(){
        return view('cart');
    }
    public function add_to_cart(Request $request){

    }
}