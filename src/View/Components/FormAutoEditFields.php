<?php

namespace Eutranet\Theme\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\View\View;

class FormAutoEditFields extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($columnName, $specs, $resource)
    {
		$this->resource = $resource;
		$this->specs = $specs;
		$this->columnName = $columnName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('theme::components.form-auto-edit-fields', [
			'columnName' => $this->columnName,
	        'specs' => $this->specs,
	        'resource' => $this->resource]);
    }
}
