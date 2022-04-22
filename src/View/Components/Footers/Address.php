<?php

namespace Eutranet\Theme\View\Components\Footers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Log;
use Eutranet\Be\Models\Corporate;

class Address extends Component
{
	private $corporate;

	/**
	 * Create a new component instance.
	 *
	 * @return void
	 */
	public function __construct(Corporate $model, $id)
	{
		$this->corporate = $model::find($id) ?? NULL;
		if ($this->corporate === NULL) {
			Log::critical('Missing Corporate entry with id ' . $id . ' in order to display laravel-corporate address');
		}
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return Application|Factory|View
	 */
	public function render(): View|Factory|Application
	{
		return view('theme::components.footers.address', ['corporate' => $this->corporate]);
	}
}
