<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($id){
    	$article= \App\Article::find($id);
		return view("article.show",["article" => $article]); 
    }
	
	public function index(){
		$articles= \App\Article::all();
		return view("article.all",["article"=>$articles]);
	}
	public function create(){
		return view('article.create');
	}
	public function store(){
		$new_article=new \App\Article;
		$new_article->title=request('title');
		$new_article->excerpt=request('excerpt');
		$new_article->body=request('body');
		
		$new_article->save();
		return redirect('/articles');
	}
	
	public function edit($id){
		$update_article=\App\Article::find($id);
		
		return view("article.edit",["article"=>$update_article]);
	}
	public function update($id){
		$update_article=\App\Article::find($id);
		$update_article->title=request('title');
		$update_article->excerpt=request('excerpt');
		$update_article->body=request('body');
		
		$update_article->save();
		return redirect('/articles/'.$update_article->id);
		
	}
}
