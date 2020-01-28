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
//PUT , GET, POST, DELETE

Route::get('/', function () {
    return view('welcome');
});
//se richiesto la pagina sonobello esegue la funzione

#non appena viene chiamata first_example con un valore si richiama la funzione get_post
Route::get('first_example/{slug}','PostController@get_post');
Route::get('/about',"AssignController@test");

Route::get('/about/{article}',"ArticlesController@show");
Route::get('/articles',"ArticlesController@index")->name('articles.index');
Route::post('articles',"ArticlesController@store");
Route::get('/articles/create',"ArticlesController@create");
Route::get('/articles/{article}',"ArticlesController@show")->name('articles.show');
Route::get('/articles/{update_article}/edit',"ArticlesController@edit");
Route::put('/articles/{update_article}',"ArticlesController@update");

