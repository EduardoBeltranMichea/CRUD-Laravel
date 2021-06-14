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
    return redirect(url('home'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('pessoa')->group(function(){
	Route::get('/', 'PessoaController@index')->name('pessoa_home');
	Route::get('/cadastropessoa', 'PessoaController@add');
	Route::post('/salvarpessoa', 'PessoaController@save')->name('pessoa_save');
	Route::get('/editpessoa/{id}', 'PessoaController@edit');
	Route::post('/updatepessoa/{id}', 'PessoaController@update')->name('pessoa_update');
	Route::get('/excluirpessoa/{id}', 'PessoaController@delete')->name('pessoa_delete');
});

Route::prefix('cidade')->group(function(){
	Route::get('/', 'CidadeController@index')->name('cidade_home');
	Route::get('/cadastrocidade', 'CidadeController@add');
	Route::post('/salvarcidade', 'CidadeController@save')->name('cidade_save');
	Route::get('/editcidade/{id}', 'CidadeController@edit');
	Route::post('/updatecidade/{id}', 'CidadeController@update')->name('cidade_update');
	Route::get('/excluircidade/{id}', 'CidadeController@delete')->name('cidade_delete');
});
