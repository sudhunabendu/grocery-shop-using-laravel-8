<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $req){

        if ($req->session()->has('users')) {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('users')['id'];
            $cart->product_id = $req->product_id;
            $cart->name = $req->name;
            $cart->category_id = $req->category_id;
            $cart->description = $req->description;
            $cart->weight = $req->weight;
            $cart->offer_price = $req->offer_price;
            $cart->save();
            return redirect('/products');
        } else {
            // return redirect('/');
          echo "<script> 
           alert('please login first then purchase the product');
            </script>";
            return redirect('/');
        }
    }

    public static function cartItem()
    {
        $userId = Session::get('users')['id'];
        return Cart::where('user_id', $userId)->count();

    }

}
