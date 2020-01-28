<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Article;

class ArticlesController extends Controller
{
    public function show(Article $article){
    	
		return view("article.show",["article" => $article]); 
    }
	
	public function index(){
		$articles= \App\Article::latest()->get();
		return view("article.all",["article"=>$articles]);
	}
	public function create(){
		return view('article.create');
	}
	public function store(){
		request()->validate([
			'title'=> 'required',
			'excerpt' => 'required',
			'body' => 'required'
			]);
		/* $new_article=new \App\Article;
		$new_article->title=request('title');
		$new_article->excerpt=request('excerpt');
		$new_article->body=request('body');
		
		$new_article->save();*/
		Article::create([
		
			'title'=> request('title'),
			'excerpt' => request('excerpt'),
			'body' => request('body')
			]
		);
		return redirect(route('articles.index'));
	}
	
	public function edit(Article $update_article){
		
		return view("article.edit",["article"=>$update_article]);
	}
	public function update(Article $update_article){
		/* $update_article->title=request('title');
		$update_article->excerpt=request('excerpt');
		$update_article->body=request('body');
		
		$update_article->save(); */
		$update_article->update([
		'title' => request('title'),
		'excerpt' => request('excerpt'),
		'body'=> request('body')
		]);
		return redirect(route('articles.show',$update_article->id));
		
	}
}
