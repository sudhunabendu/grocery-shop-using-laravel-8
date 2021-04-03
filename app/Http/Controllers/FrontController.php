<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


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
    public function Product_Details($id){
        $data = Product::find($id);
        return view('frontend.product_details', ["product" => $data]);
    }

    public function CartList(){
        $userId = Session::get('users')['id'];
        if($userId){
            $data = DB::table('cart')
            ->join('products', 'cart.product_id', 'products.id')
            ->select('products.*', 'cart.id as cart_id')
            ->where('cart.user_id', $userId)
            ->get();
        return view('frontend.master', ['product' => $data]);
    }else{
        return redirect('/products');
    }
 }
        
}
