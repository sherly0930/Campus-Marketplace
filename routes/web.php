<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::group(['middleware' => ['auth', 'userrole:buyer', 'checkheader']], function () {
    Route::get('/buyerhome', [App\Http\Controllers\HomeController::class, 'indexBuyer'])->name('buyerhome');
    Route::get('/gotoproduct', [App\Http\Controllers\ProdController::class, 'viewData']);
    Route::get('/proddetails/{id}', [App\Http\Controllers\ProdController::class, 'prodDetails'])->name('proddetails');
});

Route::group(['middleware' => ['auth', 'userrole:seller']], function () {
    Route::get('/sellerhome', [App\Http\Controllers\HomeController::class, 'indexSeller'])->name('sellerhome');
    // Create=add product
    // Bring all the form data to productdata/create, then it'll go to ProductController
    Route::post('/proddata/create', 'App\Http\Controllers\ProdController@create');
    // Route::post('/proddata/create', 'App\Http\Controllers\ProdController@store');
    Route::post('products', [App\Http\Controllers\ProdController::class, 'store']);
    // Edit prod desc
    Route::get('/proddata/{id}/edit', 'App\Http\Controllers\UpdateDescController@edit');
    // Update prod desc
    Route::post('/proddata/{id}/update', 'App\Http\Controllers\UpdateDescController@update');
    // Delete seller acc
    Route::get('/proddata/{id}/delete', 'App\Http\Controllers\DeleteProdController@delete');
});

// BCS3453 [PROJECT]-SEMESTER 2324/1
// Student ID: CF22004
// Student Name: Gan Shay Rie