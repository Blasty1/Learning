<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $fillable=['ArticleName','ArticlePreface','ArticlePathImage','ArticlePathFileText','user_id','Approved'];
    
    public function author(){
    	
    	return $this->belongsTo(User::class,'user_id');
    }
	
	public function comments(){
		
		return $this->HasMany(Comment::class);
		
	}
	
}
