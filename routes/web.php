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

//Auth::routes();

Route::group(['middleware'=> ['web']],function(){
Route::auth();
});


Route::get('/pesquisa', ['as' => 'users.index', 'uses' => 'ControllerProdutos@pesquisa']);

Route::get('/','ControllerMv@load');

Route::get('/page',['as' => 'pagina.inicial', 'uses' => 'ControllerProdutos@page']);
//Route::get('/chamados','ControllerProdutos@chamado');

Route::get('/search','ControllerProdutos@search');
//Route::get('/{name}/pesquisa','ControllerProdutos@pesquisa');
//Route::get('/pesquisa','ControllerProdutos@pesquisa');

Route::post('/salvaproduto','ControllerProdutos@salvaproduto');
Route::get('/listaproduto','ControllerProdutos@listaproduto');
Route::get('/listaprodutofull','ControllerProdutos@listaprodutofull');
Route::get('/criaproduto','ControllerProdutos@criaproduto');
Route::get('/{id}/editaproduto','ControllerProdutos@editaproduto');
Route::put('/{id}/updateproduto','ControllerProdutos@updateproduto');

Route::get('template','ControllerProdutos@template');

Route::get('/listacolaborador','ControllerColaborador@listacolaborador');
Route::post('/salvacolaborador','ControllerColaborador@salvacolaborador');
Route::get('/criacolaborador','ControllerColaborador@criacolaborador');

Route::get('/listafuncionario','ControllerFuncionario@listafuncionario');
Route::post('/salvafuncionario','ControllerFuncionario@salvafuncionario');
Route::get('/criafuncionario','ControllerFuncionario@criafuncionario');
Route::get('/{id}/editafuncionario', 'ControllerFuncionario@editafuncionario');
Route::put('/{id}/atualizafuncionario', 'ControllerFuncionario@atualizafuncionario');


Route::get('/criatype','ControllerProdutos@criatype');
Route::post('/salvatype','ControllerProdutos@salvatype');
Route::get('/listatype','ControllerProdutos@listatype');
//Route::get('/addtype','ControllerProdutos@addtype');

Route::get('/criamv','ControllerMv@criamv');
Route::post('/salvamv','ControllerMv@salvamv');
Route::get('/listamv','ControllerMv@listamv');
Route::get('/listasoma','ControllerMv@listasoma');

Route::get('/author','ControllerMv@author');

Route::get('/load','ControllerMv@load');

Route::get('/chamado','ControllerProdutos@chamado');
Route::get('/teste','ControllerProdutos@teste');

Route::get('/{id}/addtype','ControllerProdutos@addtype');
Route::post('/{id}/salvaaddtype','ControllerProdutos@salvaaddtype');
Route::get('/jsModal', 'ControllerProdutos@jsModal');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
