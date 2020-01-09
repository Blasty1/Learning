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
    return view('welcome');
});
//se richiesto la pagina sonobello esegue la funzione

#non appena viene chiamata first_example con un valore si richiama la funzione get_post
Route::get('first_example/{slug}','PostController@get_post');
