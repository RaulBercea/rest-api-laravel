<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/registra-token', 'RegistraTokenController@registra')->name('registra-token');

Route::apiResource('/readed-books', 'ReadedBookController');


Route::get('/pippo', 'PippoController@index');

Route::get('/pippo', 'PippoController@index2');