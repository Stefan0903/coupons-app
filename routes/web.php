<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/myCoupons', 'CouponsController@index')->name('coupons.index');

Route::get('/coupon/subscribe/{coupon}', 'CouponsController@subscribe')->name('coupon.subscribe');

Route::get('/coupon/{coupon}', 'CouponsController@show')->name('coupon.show');

Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function(){
    Route::get('/', 'AdminsController@index')->name('admin.index');
    Route::post('/', 'AdminsController@store')->name('coupon.store');
    Route::patch('/coupons', 'AdminsController@update')->name('coupon.update');
    Route::get('/coupons/{coupon}', 'AdminsController@destroy')->name('coupon.delete');
});


