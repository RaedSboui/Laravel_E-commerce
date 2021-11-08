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

require __DIR__.'/auth.php';

// ADMIN
Route::get('/admin','back\LoginController@showForm')->name('admin.login');
Route::post('/admin','back\LoginController@login')->name('admin.auth');
Route::post('/admin/logout', 'back\LoginController@logout')->name('admin.logout');

Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
    Route::get('/home', 'back\HomeController@index')->name('admin.home');
    Route::resource('categories', back\CategoryController::class);
    Route::resource('products', back\ProductController::class);
});

// USER
Route::get('/', 'front\HomeController@home')->name('home');
Route::get('/about', 'front\HomeController@about')->name('about');
Route::get('/mail', 'front\HomeController@contact')->name('mail');
Route::get('/front/products/{category}', 'front\ProductController@index')->name('front.product');
Route::get('/front/products/single/{product}', 'front\ProductController@single')->name('front.single');

// Cart
Route::get('/cart', 'front\CartController@index')->name('cart.index');
Route::post('/cart', 'front\CartController@store')->name('cart.store');
Route::post('/cart/update', 'front\CartController@update')->name('cart.update');
Route::post('/cart/remove', 'front\CartController@remove')->name('cart.remove');
Route::post('/cart/clear', 'front\CartController@clear')->name('cart.clear');
Route::get('/cart/auth', ['middleware' => ['role:user'], 'uses' => 'front\CartController@shop'])->name('cart.shop');
