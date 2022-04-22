<?php

namespace Eutranet\Theme;

use Eutranet\Init\PackageServiceProvider;
use Eutranet\Init\Package;
use Eutranet\Theme\View\Components\Seo\Meta;
use Eutranet\Theme\View\Components\Footers\Address;
use Eutranet\Theme\Console\Commands\InstallEutranetThemeCommand;

class ThemeServiceProvider extends PackageServiceProvider
{
	public function configurePackage(Package $package): void
	{
		$package
			->name('laravel-theme')
			->hasConfigFile(['eutranet-theme']) // php artisan vendor:publish --tag=your-laravel-init-name-config
			->hasViews('theme')
			->hasViewComponents('theme', Meta::class)
			->hasViewComponents('theme', Address::class)
			->hasTranslations()
			->hasAssets()
			->hasCommand(InstallEutranetThemeCommand::class)
			->hasMigrations('create_eutranet_theme_tables')
			->hasRoutes(['web']);
	}
}