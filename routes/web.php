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

Route::get('kategori', function () {
    return "hello kategori";
});

Route::get('kategori/{id}', function($id) {
    return "hello kategori ".$id;
});

//Route::resource('kategori', 'KategoriController');
//Route::resource('kategori', 'KategoriController')->only(['index','show']);
Route::resource('kategori', 'KategoriController')->except(['delete','destroy']);
