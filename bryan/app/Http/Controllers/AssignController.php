<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class AssignController extends Controller
{
    public function test(){
    	$articles=\App\Article::latest()->get();
    	return view('example',[
    		'article' => $articles
    	]); 
    } 
}
