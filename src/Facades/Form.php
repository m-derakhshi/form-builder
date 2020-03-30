<?php
namespace mderakhshi\formBuilder\Facades;


use Illuminate\Support\Facades\Facade;

class Form extends Facade {
	public static $fff = 11;
	
	/**
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'formBuilder';
	}
	
}
