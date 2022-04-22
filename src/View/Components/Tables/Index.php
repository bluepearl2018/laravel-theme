<?php

namespace App\View\Components\Tables;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Index extends Component
{
	private $entries;
	private $model;
	private $route;

	/**
	 * Create a new component instance.
	 *
	 * @return void
	 */
	public function __construct($entries, $model, $route)
	{
		$this->entries = $entries;
		$this->model = $model;
		$this->route = $route;
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return Application|Factory|View
	 */
	public function render()
	{
		return view('components.tables.index', [
			'entries' => $this->entries,
			'model' => $this->model,
			'route' => $this->route
		]);
	}
}
