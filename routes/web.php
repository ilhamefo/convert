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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'FrontController@index')->name('home.store');
Route::get('/get_rate', 'FrontController@get_rate')->name('get_rate');
// Route::post('/order', 'FrontController@order')->name('order');
// Route::get('/order/{order}', 'FrontController@order_view')->name('order.view');

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::prefix('home')->middleware('adminonly')->group(function () {
    Route::get('/company', 'HomeController@company')->name('home.company');
    Route::get('/providers', 'HomeController@providers')->name('home.providers');
    Route::get('/tos', 'HomeController@tos')->name('home.tos');
    Route::get('/admin', 'HomeController@admin')->name('home.admin');
    Route::get('/testimonial', 'HomeController@testimonial')->name('home.testimonial');
    Route::get('/providers/{providers}/edit', 'HomeController@edit_providers')->name('edit.providers');
    Route::get('/tos/{tos}/edit', 'HomeController@edit_tos')->name('edit.tos');
    Route::get('/testimonial/{testimonial}/edit', 'HomeController@edit_testimonial')->name('edit.testimonial');
    Route::get('/admin/{admin}/edit', 'HomeController@edit_admin')->name('edit.admin');
    Route::post('/providers', 'HomeController@store_providers')->name('store.providers');
    Route::post('/tos', 'HomeController@store_tos')->name('store.tos');
    Route::post('/admin', 'HomeController@store_admin')->name('store.admin');
    Route::post('/testimonial', 'HomeController@store_testimonial')->name('store.testimonial');
    Route::put('/company/{company}', 'HomeController@update_company')->name('update.company');
    Route::put('/providers/{providers}', 'HomeController@update_providers')->name('update.providers');
    Route::put('/tos/{tos}', 'HomeController@update_tos')->name('update.tos');
    Route::put('/testimonial/{testimonial}', 'HomeController@update_testimonial')->name('update.testimonial');
    Route::put('/admin/{admin}', 'HomeController@update_admin')->name('update.admin');
    Route::delete('/providers/{providers}/destroy', 'HomeController@destroy_providers')->name('destroy.providers');
    Route::delete('/tos/{tos}/destroy', 'HomeController@destroy_tos')->name('destroy.tos');
    Route::delete('/testimonial/{testimonial}/destroy', 'HomeController@destroy_testimonial')->name('destroy.testimonial');
    Route::delete('/admin/{admin}/destroy', 'HomeController@destroy_admin')->name('destroy.admin');
});
Route::prefix('home')->group(function () {
    Route::get('', 'HomeController@index')->name('home');
    Route::get('/rates', 'HomeController@rates')->name('home.rates');
    Route::post('/rates', 'HomeController@store_rates')->name('store.rates');
    Route::get('/rates/{rates}/edit', 'HomeController@edit_rates')->name('edit.rates');
    Route::put('/rates/{rates}', 'HomeController@update_rates')->name('update.rates');
    Route::delete('/rates/{rates}/destroy', 'HomeController@destroy_rates')->name('destroy.rates');
    Route::get('/password', 'HomeController@password')->name('home.password');
    Route::put('/password', 'HomeController@update_password')->name('update.password');
});
