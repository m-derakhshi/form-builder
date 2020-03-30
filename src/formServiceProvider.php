<?php
namespace mderakhshi\formBuilder;


use Illuminate\Support\ServiceProvider;

class formServiceProvider extends ServiceProvider {
	
	/**
	 * @var bool
	 */
	protected $defer = true;
	
	
	/**
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('formBuilder', function() {
			return new formService();
		});
	}
	
	/**
	 * @return array
	 */
	public function provides()
	{
		return ['Curl'];
	}
	
}
