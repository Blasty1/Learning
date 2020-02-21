<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    		
        return view('articles.index');
    }
	
	
	public function Profile(){
		return view('articles.my_profile',[
        "Num_articoli" => ArticleController::my_articles()->count() //numero degli articoli scritti
        ]);
	}
	

}
