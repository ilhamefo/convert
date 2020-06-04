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
Route::post('/order', 'FrontController@order')->name('order');
Route::get('/order/{order}', 'FrontController@order_view')->name('order.view');

Auth::routes();

Route::prefix('home')->group(function () {
    Route::get('', 'HomeController@index')->name('home');
    Route::get('/company', 'HomeController@company')->name('home.company');
    Route::get('/providers', 'HomeController@providers')->name('home.providers');
    Route::get('/rates', 'HomeController@rates')->name('home.rates');
    Route::get('/providers/{providers}/edit', 'HomeController@edit_providers')->name('edit.providers');
    Route::get('/rates/{rates}/edit', 'HomeController@edit_rates')->name('edit.rates');
    // Route::get('/tambah', 'KegiatanController@create')->name('kegiatans.create');
    // Route::get('/{kegiatan}/edit', 'KegiatanController@edit')->name('kegiatans.edit');
    // Route::get('/{kegiatan}', 'KegiatanController@show')->name('kegiatans.show');
    Route::post('/providers', 'HomeController@store_providers')->name('store.providers');
    Route::post('/rates', 'HomeController@store_rates')->name('store.rates');
    Route::put('/company/{company}', 'HomeController@update_company')->name('update.company');
    Route::put('/providers/{providers}', 'HomeController@update_providers')->name('update.providers');
    Route::put('/rates/{rates}', 'HomeController@update_rates')->name('update.rates');
    Route::delete('/providers/{providers}/destroy', 'HomeController@destroy_providers')->name('destroy.providers');
    Route::delete('/rates/{rates}/destroy', 'HomeController@destroy_rates')->name('destroy.rates');
});
