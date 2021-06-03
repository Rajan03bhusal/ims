<?php

use Illuminate\Support\Facades\Route;
use App\Models\product;

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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/',function(){
$products=product::all();
 return view ('products',['products'=>$products]);
 	
});


Route::get('/product/{product}',function($id){
	$product=product::find($id);
 return view ('product',['product'=>$product]);

});


// Route::get('/create_product',function(){
// 	product::create([
// 		'product_name'=>'laptop',
// 		'product_desc'=>'This is very nice laptop',
// 		'price'=>'100000',
// 		'img'=>''

// 	]);

// });


// Route::get('/get_product',function(){
// $product=product::get();
// return $product;
// });



Route::get('/home',function(){
    $products=product::all();
    return view('home',['products'=>$products]);

});