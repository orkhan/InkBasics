<?php namespace Ink\Basics\Facades;

use Illuminate\Support\Facades\Facade;

class InkModel extends Facade {
	
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'inkmodel'; }
	
}