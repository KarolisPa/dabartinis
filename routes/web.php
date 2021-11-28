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
    return view('index');
})->name('index');

Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/products', function () {
    return view('fences');
})->name('products');

Route::get('/about', function (){
    return view('About');
})->name('about');

Route::get('/dash', function(){
    return view('adminBoard');
})->middleware('auth')->name('adminPanel');

Route::get('/product/{id}', [\App\Http\Livewire\ProductList::class, 'show'])
    ->name('showPreke');

Route::get('/discount/{id}', [\App\Http\Livewire\ProductList::class, 'showDiscount'])
    ->name('showPrekeDiscount');

require __DIR__.'/auth.php';
