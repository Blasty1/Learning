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
Auth::routes();
Route::get('/', function () {
    return view('home');
});

//pagine iniziale dopo essersi loggati
Route::get('/index','HomeController@index');

//Singolo articolo
route::get('/articles/{id}','ArticleController@view_article');

//pagina del mio profilo con mie informazioni
Route::get('/my_profile','HomeController@Profile');

//pagina dove creo un contenuto
route::get('/new','ArticleController@create')->name('new_article');

//Quando ricevo i dati in POST li registro nel database
route::post('/new','ArticleController@store');

//Pagina in cui visiono tutti gli articoli
Route::get('/articles','ArticleController@all_articles')->name('all_articles');

//creo un nuovo commento all'articolo
Route::post('/articles/{id}','CommentController@store');

//solo gli utenti proprietari possono eseguire queste azioni
Route::middleware('can:user_article,id')->group(function(){
	//Pagina in cui posso modificare i dati degli articoli
	Route::get('/{id}/edit','ArticleController@edit');
	
	//Update dei dati e mostro il file modificato
	Route::put('/{id}/edit','ArticleController@update');
	
	//Elimino l'articolo
	Route::get('/{id}/delete','ArticleController@delete');
	
	//Articoli non approvati
	Route::get('/approve_article','ArticleController@to_approve');
	
	//Approvare l'articolo
	Route::get('/approve/{id}','ArticleController@approved');
});

