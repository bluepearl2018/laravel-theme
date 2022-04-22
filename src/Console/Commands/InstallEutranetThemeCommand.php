<?php

namespace Eutranet\Theme\Console\Commands;

use Eutranet\Init\Console\Commands\InstallPackageCommand;

class InstallEutranetThemeCommand extends InstallPackageCommand
{

	public function __construct()
	{
		$this->signature = 'eutranet:install-theme';
		parent::__construct('theme', $this->signature);
	}

}
