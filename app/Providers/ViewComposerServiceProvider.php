<?php namespace twentyseven\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Contracts\Auth\Authenticatable;


class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot(Guard $auth)
	{
		

		
		view()->composer('layouts.admin.navigation', function ($view) use ($auth) {
			$view->with('currentUser', $auth->user());
		});
		 
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
