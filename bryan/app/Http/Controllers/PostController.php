<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function get_post($slug){
		$posts=\DB::table('posts')->where('slug',$slug)->first();
		return dd($posts);
		
		//return view('sonobello',["post"=>$posts[$slug] ?? "nothing here"]);
	}
}
