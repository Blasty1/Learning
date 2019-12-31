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

/*Route::get('/first_example/{post}',function($post){
	$posts=[
	"First_post" => "Bruno distrugge tutto cazzo",
	"Second_post" => "Antonio grasso ea nu pipolo"
	];
	return view('sonobello',["post"=>$posts[$post] ?? "nothing here"]);
}); */

Route::get('first_example/{slug}','PostController@get_post');
Route::get('ciao',function(){ echo phpinfo();});
