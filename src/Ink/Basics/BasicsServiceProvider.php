<?php namespace Ink\Basics;

use Illuminate\Support\ServiceProvider;
use Config;

class BasicsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;
	
	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('ink/basics');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// register aliases
		$this->registerAliases();
	}
	
	private function registerAliases()
	{
		$this->app->booting(function() {
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('InkController', 'Ink\Basics\Facades\InkController');
			$loader->alias('InkModel', 'Ink\Basics\Facades\InkModel');
			$loader->alias('InkValidator', 'Ink\Basics\Facades\InkValidator');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}