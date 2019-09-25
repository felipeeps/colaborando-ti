<?php
Route::get('/', function () {
    return view('inicio');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Controller tipo RestFul
Route::resource('products', 'ProdutoController')->middleware('auth');
Route::resource('categories', 'CategoriesController')->middleware('auth');
Route::resource('posts', 'PostController')->middleware('auth');

//Rota Aprovação de Posts
Route::get('/aprovarposts', 'PostController@listaPostsAprovar')->name('aprovarposts')->middleware('auth');
Route::get('/postaprovado/{id}', 'PostController@aprovarPost')->middleware('auth');
Route::get('/postreprovado/{id}', 'PostController@reprovarPost')->middleware('auth');
Route::get('/postdesativado/{id}', 'PostController@desativarPost')->middleware('auth');


