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


Route::get('/login', ['as'=>'login', 'uses'=>'Admin\UsuarioController@login']);
Route::post('/autenticar', ['as'=>'autenticar', 'uses'=>'Admin\UsuarioController@autenticar']);

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
	
	Route::get('/', ['as'=>'admin.index', 'uses'=>'Admin\UsuarioController@index']);
	Route::get('/logout', ['as'=>'admin.logout', 'uses'=>'Admin\UsuarioController@logout']);

	Route::get('/post', ['as'=>'post.list', 'uses'=> 'Admin\PostController@listar']);
	Route::get('/post/adcionar', ['as'=>'post.add', 'uses'=> 'Admin\PostController@adicionar']);
	Route::get('/categorias', ['as'=>'category.list', 'uses'=> 'Admin\CategoriaController@listar']);
});



