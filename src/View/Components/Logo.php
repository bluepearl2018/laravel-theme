<?php

namespace Eutranet\Theme\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\View\View;

class Logo extends Component
{
	private string $logoRoutePath;

	/**
	 * Create a new component instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->logoRoutePath = route('welcome');
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return Application|Factory|View
	 */
	public function render(): View|Factory|Application
	{
		return view('theme::components.logo', [
			'logoRoutePath' => $this->logoRoutePath
		]);
	}
}
