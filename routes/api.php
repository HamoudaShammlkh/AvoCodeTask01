<?php

use App\Http\Resources\ProductCollection;
use App\Product;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::get('/products', function () {
//    return new ProductCollection(Product::all());
//});
Route::post('products/insertToCart/{id}', 'API\ProductController@insertToCart');
Route::resource('products','API\ProductController');
Route::post('products/pay/{product_id}','API\ProductController@pay');
Route::resource('carts','API\CartController');
//Route::post('/add','')
