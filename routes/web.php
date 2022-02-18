<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')
    ->name('home');

Route::get('/details', 'DetailController@index')
    ->name('details');

Route::get('/checkout', 'CheckoutController@index')
    ->name('checkout');

Route::get('/checkout/success', 'CheckoutController@success')
    ->name('checkout-success');

Route::get('/login', 'LoginController@index')
    ->name('login');


Route::prefix('admin')
    ->namespace('Admin')
    ->group(function(){
    Route::get('/', 'DashboardController@index')
        ->name('dashboard');
});
    

Route::get('/oki', function () {
    return ('hello laravel');
});

  