<?php

nameSpace App\Provider;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
class serviceProvider extends ServiceProvider{

	public function boot(){
		Schema::defaultStringLength(191)''
	}
	/**
	*register
	*
	* @return void
	*/
	public function register()
	{

	}
}