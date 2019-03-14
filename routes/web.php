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
Route::get('dashboard', function () {
    return view('dashboard/index');
});


Route::resource('kategori', 'KategoriController');
Route::get('cariKategori', 'KategoriController@search');
Route::post('tambahKategori', 'KategoriController@store');
Route::get('editKategori/{id}', 'KategoriController@edit');
Route::post('updateKategori/{id}', 'KategoriController@update');
Route::get('hapusKategori/{id}', 'KategoriController@destroy');



//Route::resource('kategori', 'KategoriController')->except(['delete','destroy']);
