<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $data = Product::all();
        return view('frontend.home', ['product' => $data]);
    }

    //  public function show(){
    //      $data = Product::all();
    //      return view('frontend.body', ['product' => $data]);
    //  }
    public function Product_Details(){
        return view('frontend.product_details');
    }
}
