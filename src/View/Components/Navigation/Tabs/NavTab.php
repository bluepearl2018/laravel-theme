<?php

namespace App\View\Components\Navigation\Tabs;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Session;

/**
 * Menu component in order to inject controlled content into Nav Tab
 */
class NavTab extends Component
{
	/**
	 * @var string
	 */
	private string $name;

	/**
	 * @var string
	 */
	private string $routeClass;

	/**
	 * New component instance for the view
	 * view('components.laravel-navigation.tabs.nav-tab')
	 *
	 * @return void
	 */
	public function __construct($name, $routeClass)
	{
		$this->name = $name;
		$this->routeClass = $routeClass;
	}

	/**
	 * Get the view / contents that represent the component.
	 * Associated view is view('components.laravel-navigation.tabs.nav-tab')
	 *
	 * @return Application|Factory|View
	 */
	public function render(): View|Factory|Application
	{
		return view('components.laravel-navigation.tabs.nav-tab', [
			'name' => $this->name,
			'routeClass' => $this->routeClass,
		]);
	}
}
