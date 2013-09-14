<?php namespace Ink\Basics\Facades;

use Illuminate\Support\Facades\Facade;

class InkPresenter extends Facade {
	
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'inkpresenter'; }
	
}