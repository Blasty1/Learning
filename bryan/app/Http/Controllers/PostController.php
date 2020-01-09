<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;

class PostController extends Controller
{
    public function get_post($slug){
    	//otteniamo i valori dal db , otteniamo ilprimo valore o l'errore 404
		$post=posts::where('slurp',$slug)->firstorFail();
		
		#ritorniamo la pagina html e la variabile $codice che possiede il risultato richiesto
		return view('sonobello',['codice' => $post]);

	}
}
