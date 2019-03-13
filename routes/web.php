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


Route::resource('layouts', 'TemplateController');

Route::get('dashboard', function () {
    return view('dashboard/index');
});

Route::get('kategori', function () {
    return view('dashboard/kategori');
});

Route::resource('kategori', 'KategoriController')->except(['destroy']);

Route::get('cari', 'KategoriController@search');

Route::get('kategori{id}', function () {
    return view('dashboard/kategori');
});

//Route::resource('kategori', 'KategoriController')->except(['delete','destroy']);
