<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/','Frontend\TopController@getIndex');
Route::get('list','Frontend\ProductController@getIndex');
Route::get('cart', 'Frontend\CartController@getIndex');
Route::any('login/{provider?}','Frontend\LoginController@login');
Route::post('recover_pass','Frontend\LoginController@recoverPass');
Route::post('register','Frontend\RegisterController@register');
Route::post('logout','Frontend\LoginController@logout');
Route::post('updateCart', 'Frontend\CartController@updateCart');
Route::post('deleteCart', 'Frontend\CartController@deleteCart');
Route::any('addCart', 'Frontend\CartController@addCart');
Route::controller('checkout', 'Frontend\CheckoutController');
Route::get('detail', 'Frontend\DetailController@getIndex');
Route::any('contact', 'Frontend\ContactController@getContact');
Route::get('about',function(){
    return view('Frontend/about');
});
