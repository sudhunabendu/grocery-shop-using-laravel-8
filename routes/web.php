<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/','FrontController@index');
Route::get('/logout', function () {
  Session::forget('users');
  return redirect('/');;
});
Route::get('/',[FrontController::class,'index']);
Route::get('product_details/{id}',[FrontController::class,'Product_Details']);
Route::post('/signup',[UserController::class,'SignUp']);
Route::post('/login',[UserController::class,'login']);
Route::get('/products',[ProductController::class,'index']);
Route::get('/dashboard',[AdminController::class,'AdminDashboard']);
Route::get('/addproducts',[ProductController::class,'OpenForm']);
Route::post('/addproduct',[ProductController::class,'store']);
Route::get('/addcategory',[AdminController::class,'AddCategory']);
Route::post('/addcategory',[AdminController::class,'insertCategory']);
Route::get('/cartlist',[FrontController::class,'CartList']);



// Route::get('/dashboard', function () {
//       return view('backend.dashboard');
//   });

