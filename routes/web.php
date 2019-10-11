<?php
//Publicos
Route::get('/', 'PublicController@dependeciasPaginaInicial')->name('');
Route::get('/postagens', 'PublicController@dependeciasPaginaPostagens');
Route::get('/postagens/{id}', 'PublicController@dependeciasPaginaPostagensID');

//Rotas
Auth::routes();
Route::get('/admin', 'HomeController@verificarColaborador')->middleware('auth');

//Controller tipo RestFul
Route::resource('products', 'ProdutoController')->middleware('auth');
Route::resource('categories', 'CategoriesController')->middleware('auth');
Route::resource('posts', 'PostController')->middleware('auth');

//Rota Aprovação de Posts
Route::get('/aprovarposts', 'PostController@listaPostsAprovar')->name('aprovarposts')->middleware('auth');
Route::get('/postaprovado/{id}', 'PostController@aprovarPost')->middleware('auth');
Route::get('/postreprovado/{id}', 'PostController@reprovarPost')->middleware('auth');
Route::get('/postdesativado/{id}', 'PostController@desativarPost')->middleware('auth');

Route::get('/roles-permissions', 'HomeController@rolesPermissions');
