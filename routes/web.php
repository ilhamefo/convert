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
    Route::get('/perusahaan', 'HomeController@perusahaan')->name('home.perusahaan');
    Route::get('/providers', 'HomeController@providers')->name('home.providers');
    Route::get('/persyaratan', 'HomeController@persyaratan')->name('home.persyaratan');
    Route::get('/admin', 'HomeController@admin')->name('home.admin');
    Route::get('/testimonial', 'HomeController@testimonial')->name('home.testimonial');
    Route::get('/providers/{providers}/edit', 'HomeController@edit_providers')->name('edit.providers');
    Route::get('/persyaratan/{persyaratan}/edit', 'HomeController@edit_persyaratan')->name('edit.persyaratan');
    Route::get('/testimonial/{testimonial}/edit', 'HomeController@edit_testimonial')->name('edit.testimonial');
    Route::get('/admin/{admin}/edit', 'HomeController@edit_admin')->name('edit.admin');
    Route::post('/providers', 'HomeController@store_providers')->name('store.providers');
    Route::post('/persyaratan', 'HomeController@store_persyaratan')->name('store.persyaratan');
    Route::post('/admin', 'HomeController@store_admin')->name('store.admin');
    Route::post('/testimonial', 'HomeController@store_testimonial')->name('store.testimonial');
    Route::put('/perusahaan/{perusahaan}', 'HomeController@update_perusahaan')->name('update.perusahaan');
    Route::put('/providers/{providers}', 'HomeController@update_providers')->name('update.providers');
    Route::put('/persyaratan/{persyaratan}', 'HomeController@update_persyaratan')->name('update.persyaratan');
    Route::put('/testimonial/{testimonial}', 'HomeController@update_testimonial')->name('update.testimonial');
    Route::put('/admin/{admin}', 'HomeController@update_admin')->name('update.admin');
    Route::delete('/providers/{providers}/destroy', 'HomeController@destroy_providers')->name('destroy.providers');
    Route::delete('/persyaratan/{persyaratan}/destroy', 'HomeController@destroy_persyaratan')->name('destroy.persyaratan');
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
