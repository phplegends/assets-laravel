<?php

namespace PHPLegends\AssetsLaravel;

use Illuminate\Support\ServiceProvider;
use PHPLegends\Assets\Manager;

class AssetsProvider extends ServiceProvider
{

	public function register()
	{
		$this->app->bind('assets', function ($app) {

			$config = $this->app['config']->get('phplegends::assets');

			return Manager::createFromConfig($config);
		});
	}
}