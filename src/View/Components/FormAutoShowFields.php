<?php

namespace Eutranet\Theme\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\View\View;

class FormAutoShowFields extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($key, $values, $entries)
    {
		$this->entries = $entries;
		$this->key = $key;
		$this->values = $values;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('theme::components.form-auto-show-fields', ['entries' => $this->entries, 'values' => $this->values, 'key' => $this->key]);
    }
}
