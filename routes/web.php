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

Route::get('/', function () {
    return view('welcome');
});

Route::name('product.')
    ->group(function () {
        Route::get('/product', 'App\Http\Controllers\ProductController@index')->name('index');
        Route::get('/product/{id}', 'App\Http\Controllers\ProductController@show')->name('show');
    });

Route::get('/purchase', 'App\Http\Controllers\ProductController@purchase')->name('purchase');

Route::name('line.')
    ->group(function () {
        Route::post('/line/create', 'App\Http\Controllers\LineController@create')->name('create');
        Route::post('/line/delete', 'App\Http\Controllers\LineController@delete')->name('delete');
    });

Route::name('cart.')
    ->group(function () {
        Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('index');
    });



Route::get('/form', 'App\Http\Controllers\FormController@show')->name('form.show');

Route::post('/form', 'App\Http\Controllers\FormController@post')->name('form.post');

Route::get('/form/confirm', 'App\Http\Controllers\FormController@confirm')->name('form.confirm');

Route::post('/form/confirm', 'App\Http\Controllers\FormController@send')->name('form.send');

Route::get('/form/complete', 'App\Http\Controllers\FormController@complete')->name('form.complete');

Route::post('/product/search', 'App\Http\Controllers\ProductController@search');
