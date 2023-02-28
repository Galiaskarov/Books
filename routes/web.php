<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace'=>'App\Http\Controllers\Admin','prefix'=>'admin','middleware'=>['auth','admin']],function(){

    Route::get('/','Main\IndexController')->name('admin.main.index');

    Route::group(['namespace'=>'Books','prefix'=>'books'],function(){
        Route::get('/','IndexController')->name('admin.books.index');
        Route::get('/create','CreateController')->name('admin.books.create');
        Route::post('/','StoreController')->name('admin.books.store');
        Route::get('/{book}','ShowController')->name('admin.books.show');
        Route::get('/{book}/edit','EditController')->name('admin.books.edit');
        Route::patch('/{book}','UpdateController')->name('admin.books.update');
        Route::delete('/{book}','DestroyController')->name('admin.books.destroy');
    });

    Route::group(['namespace'=>'Genres','prefix'=>'genres'],function(){
        Route::get('/','IndexController')->name('admin.genres.index');
        Route::get('/create','CreateController')->name('admin.genres.create');
        Route::post('/','StoreController')->name('admin.genres.store');
        Route::get('/{genre}','ShowController')->name('admin.genres.show');
        Route::get('/{genre}/edit','EditController')->name('admin.genres.edit');
        Route::patch('/{genre}','UpdateController')->name('admin.genres.update');
        Route::delete('/{genre}','DestroyController')->name('admin.genres.destroy');
    });

    Route::group(['namespace'=>'Authors','prefix'=>'authors'],function(){
        Route::get('/','IndexController')->name('admin.authors.index');
        Route::get('/create','CreateController')->name('admin.authors.create');
        Route::post('/','StoreController')->name('admin.authors.store');
        Route::get('/{user}','ShowController')->name('admin.authors.show');
        Route::get('/{user}/edit','EditController')->name('admin.authors.edit');
        Route::patch('/{user}','UpdateController')->name('admin.authors.update');
        Route::delete('/{user}','DestroyController')->name('admin.authors.destroy');
    });

});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
