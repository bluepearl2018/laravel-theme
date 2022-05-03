<?php

namespace Eutranet\Theme\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\View\View;

class SearchBar extends Component
{
    private string|null $searchRoutePath;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($searchRoutePath = null)
    {
        $this->searchRoutePath = $searchRoutePath;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('theme::components.search-bar', [
            'searchRoutePath' => $this->searchRoutePath
        ]);
    }
}
