<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('layouts.home');
});
Route::get('/home', function () {
    return view('layouts.home');
});

Route::resource('/configs', 'ConfiguracoesController');
Route::post('/configs/store', 'ConfiguracoesController@Store');

Route::resource('/calculos', 'CalculosController');
Route::post('/calculos/create', 'CalculosController@Create');
Route::post('/calculos/store', 'CalculosController@Store');
Route::post('/calculos/show', 'CalculosController@Show');
Route::post('/calculos/exibir', 'CalculosController@Exibir');

Route::resource('membros', 'MembrosController');
Route::get('/membros/show', 'MembrosController@Show');
Route::get('/membros/edit', 'MembrosController@Edit');
Route::get('/membros/delete', 'MembrosController@Destroy');

Route::resource('instituicao', 'InstituicaoController');
Route::get('/instituicao/show', 'InstituicaoController@Show');
Route::get('/instituicao/edit', 'InstituicaoController@Edit');
Route::get('/instituicao/delete', 'InstituicaoController@Destroy');

Route::resource('despesas', 'DespesasController');
Route::get('/despesas/show', 'DespesasController@Show');
Route::get('/despesas/edit', 'DespesasController@Edit');
Route::get('/despesas/delete', 'DespesasController@Destroy');

Route::resource('receitas', 'ReceitasController');
Route::get('/receitas/show', 'ReceitasController@Show');
Route::get('/receitas/edit', 'ReceitasController@Edit');
Route::get('/receitas/delete', 'ReceitasController@Destroy');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
