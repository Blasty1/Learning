<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable=['article_id','body','user_id'];
	
    public function articles(){
    	
		return $this->belongsTo(Article::class);
		
    }
	
	 public function author(){
    	
    	return $this->belongsTo(User::class,'user_id');
    }
}
