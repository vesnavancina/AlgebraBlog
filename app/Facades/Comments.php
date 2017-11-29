<?php

namespace App\Facades

use Illuminate\Support\Facades\Facade;

class Comments extends Facade
{

	/*
	* Get the registered name of the components.
	*
	*@return string
	*
	*throws \RuntimeException
	*/
	
	protected static function getFacadeAccessor()
	{
		return 'comments';
	}
}