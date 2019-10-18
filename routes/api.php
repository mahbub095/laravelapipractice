<?php

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
Route::get('product','ProductController@product');
Route::get('product/{id}','ProductController@productbyID');
Route::post('product','ProductController@productsave');
Route::put('product/{product}','ProductController@productUpdate');
Route::delete('product/{product}','ProductController@productDelete');

Route::apiResource('product','Product');