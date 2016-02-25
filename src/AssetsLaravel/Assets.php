<?php

namespace PHPLegends\AssetsLaravel;

use Illuminate\Support\Facades\Facade;

class Assets extends Facade
{
	public static function getFacadeAccessor() { return 'assets'; }
}