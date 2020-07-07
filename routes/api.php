<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'API\AuthController@login');
    Route::post('signup', 'API\AuthController@signup');
  
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'API\AuthController@logout');
        Route::get('user', 'API\AuthController@user');
        Route::post('category/create', 'CategoryController@store');
        Route::get('category', 'CategoryController@index');
        Route::post('category/{id}', 'CategoryController@update');
        Route::delete('category/{id}', 'CategoryController@destroy');


        Route::post('product/create', 'ProductController@store');
        Route::get('product', 'ProductController@index');
        Route::post('product/{id}', 'ProductController@update');
        Route::delete('product/{id}', 'ProductController@destroy');
        Route::get('product/category/{category_id}', 'ProductController@getProductForOneCategory');



    });
});