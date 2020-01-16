<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($id){
    	$article= \App\Article::find($id);
		return view("article.show",["article" => $article]); 
    }
	
	public function all_arti(){
		$articles= \App\Article::latest()->get();
		return view("article.all",["article"=>$articles]);
	}
}
