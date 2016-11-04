<?php
/**
 * @author Ryan <yuansir@live.cn|yuansir-web.com>
 */
namespace Learn;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{

	public function register()
	{
		$this->app['test'] = $this->app->share(
			function ($app) {
				return new \Learn\Test();
			}
		);

		$this->app->booting(
			function () {
				$aliases = \Config::get('app.aliases');

				if(empty($aliases['TestClass'])){
					$loader = \Illuminate\Foundation\AliasLoader::getInstance();
					$loader->alias('TestClass','Learn\Facades\TestClass');
				}

			}
		);
	}


}