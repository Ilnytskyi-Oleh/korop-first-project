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

Route::group(['namespace' => '\App\Http\Controllers'], function (){
    Route::get('/', 'HomeController')->name('home');
});


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::group(['middleware'=>'auth', 'prefix' => 'admin', 'namespace' => '\App\Http\Controllers\Admin'], function(){

    //Categories
    Route::group(['prefix' => 'categories', 'namespace' => 'Category'], function (){
        Route::get('/', 'IndexController')->name('categories.index');
        Route::get('/{category}/edit', 'EditController')->name('categories.edit');
        Route::patch('/{category}', 'UpdateController')->name('categories.update');
        Route::get('/create', 'CreateController')->name('categories.create');
        Route::post('/', 'StoreController')->name('categories.store');
        Route::delete('/{category}', 'DeleteController')->name('categories.delete');
    });

    //Products
    Route::group(['prefix' => 'products', 'namespace' => 'Product'], function (){
        Route::get('/', 'IndexController')->name('products.index');
        Route::get('/{product}/edit', 'EditController')->name('products.edit');
        Route::patch('/{product}', 'UpdateController')->name('products.update');
        Route::get('/create', 'CreateController')->name('products.create');
        Route::post('/', 'StoreController')->name('products.store');
        Route::delete('/{product}', 'DeleteController')->name('products.delete');
    });
});

Auth::routes();


