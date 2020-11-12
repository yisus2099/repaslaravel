<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/goya', [
    'uses' =>   'PruebaController@goya',
    'as' => 'caja'
]);

Route::get('/ressendi', [
    'uses' =>   'PruebaController@ress',
    'as' => 'caja'
]);


Route::get('/velazquez', [
    'uses' =>   'PruebaController@velaz',
    'as' => 'caja'
]);

Route::get('/hola', [
    'uses' =>   'PruebaController@hola',
    'as' => 'caja'
]);

Route::get('/vermeer', [
    'uses' =>   'PruebaController@ver',
    'as' => 'caja'
]);

Route::get('/', 'PruebaController@log');

Route::post('/valida', 'PruebaController@validarLogin');









