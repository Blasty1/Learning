<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //Solo se sei amministratore
        Gate::define('is_admin',function($user){
        	return $user->User_permess == 'admin';
        });
		
		//Se sei il proprietario del file
		Gate::define('user_article',function($user,$article_id){
			if(Gate::foruser($user)->allows('is_admin')){
				return true;	
			}else{
				return $user->id == \App\Article::find($article_id)->user_id;
				
			}
			

		});
    }
}
