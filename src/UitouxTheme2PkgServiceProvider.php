<?php

namespace Abs\UitouxTheme2Pkg;

use Illuminate\Support\ServiceProvider;

class UitouxTheme2PkgServiceProvider extends ServiceProvider {
	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register() {
		$this->loadViewsFrom(__DIR__ . '/views', 'uitoux-theme2-pkg');
		$this->publishes([
			__DIR__ . '/public' => base_path('public'),
			__DIR__ . '/config/config.php' => config_path('uitoux-theme2-pkg.php'),
		]);
	}

	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot() {
	}
}
