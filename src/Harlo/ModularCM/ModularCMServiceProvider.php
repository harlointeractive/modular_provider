<?php namespace Harlo\ModularCM;
use App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class ModularCMServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
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

	public function boot()
	{
		$this->package('harlo/modular-cm');
		include __DIR__.'/../../routes.php'; // Do some routing here specific to this package
		AliasLoader::getInstance()->alias('Modular', 'Harlo\ModularCM\ModularCM');
	}

}