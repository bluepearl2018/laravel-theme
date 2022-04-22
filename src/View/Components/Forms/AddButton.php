<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AddButton extends Component
{
    private $route;
    private $resource;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $resource)
    {
        $this->route = $route;
        $this->resource = $resource;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|string|Closure
    {
        return view('components.forms.add-button', ['resource' => $this->resource, 'route' => $this->route]);
    }
}
