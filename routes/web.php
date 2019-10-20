<?php
//Publicos
Route::get('/', 'PublicController@dependeciasPaginaInicial')->name('');
Route::get('/postagens', 'PublicController@dependeciasPaginaPostagens');
Route::get('postagens/linguagem/{categoria}', 'PublicController@dependeciasPaginaPostagensCategoria')->name('public.postCategoria');
Route::get('postagens/autor/{autor}', 'PublicController@dependeciasPaginaPostagensColaborador')->name('public.postAutor');
Route::get('/postagens/{id}', 'PublicController@dependeciasPaginaPostagensID')->name('public.postID');
Route::get('postagens/Gostei/{id}', 'PublicController@avaliarPostsGostei');
Route::get('postagens/NaoGostei/{id}', 'PublicController@avaliarPostsNaoGostei');

//Rotas
Auth::routes();
Route::get('/admin', 'HomeController@verificarColaborador')->middleware('auth');

//Controller tipo RestFul
Route::resource('products', 'ProdutoController')->middleware('auth');
Route::resource('categories', 'CategoriesController')->middleware('auth');
Route::get('/categoriadesativada/{id}', 'CategoriesController@destroy')->middleware('auth');
Route::resource('posts', 'PostController')->middleware('auth');

//Rota Aprovação de Posts
Route::get('/aprovarposts', 'PostController@listaPostsAprovar')->name('aprovarposts')->middleware('auth');
Route::get('/postaprovado/{id}', 'PostController@aprovarPost')->middleware('auth');
Route::get('/postreprovado/{id}', 'PostController@reprovarPost')->middleware('auth');
Route::get('/postdesativado/{id}', 'PostController@desativarPost')->middleware('auth');

Route::get('/roles-permissions', 'HomeController@rolesPermissions');
