<?php
Route::get('/', function () {
    return view('inicio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Controller tipo RestFul
Route::resource('products', 'ProdutoController');
Route::resource('categories', 'CategoriesController');
Route::resource('posts', 'PostController');

