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

use App\Http\Controllers\JornalistaController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\TipoNoticiaController;

Route::get('/', function () {
    return view('welcome');
});



//Rotas class Jornalista
Route::get('/register', 'JornalistaController@registrar');
Route::get('/login', 'JornalistaController@login');
Route::post('/adiciona', 'JornalistaController@adiciona');


/*Route::post('/api/me', 'JornalistaController@ficha');




//Rotas class Noticias
Route::post('/api/newa/create', 'NoticiaController@registrar');
Route::put('/api/newa/update/{news_id}', 'NoticiaController@update');
Route::delete('/api/news/delete/{news_id}', 'NoticiaController@delete');
Route::get('/api/news/me', 'NoticiaController@show');
Route::get('/api/news/type/{type_id}', 'NoticiaController@type');

//Rotas class TipoNoticias
Route::post('/api/type/create', 'JornalistaController@registrar');
Route::put('/api/type/update/{type_id}', 'JornalistaController@update');
Route::delete('/api/type/delete/{type_id}', 'JornalistaController@delete');
Route::get('/api/type/me', 'JornalistaController@show');




