<?php

namespace App\View\Components\Users\Tabs;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionsAndTitle extends Component
{
    /**
     * @var string
     */
    private string $routeClass;
    private bool $aIsApplicable;
    private bool $bIsApplicable;
    private mixed $entry;
    private $model;

    /**
     * New component instance for the view
     * view('components.users.tabs.action-and-title')
     *
     * @return void
     */
    public function __construct($routeClass, $aIsApplicable, $bIsApplicable, $model, $entry)
    {
        $this->routeClass = $routeClass;
        $this->aIsApplicable = $aIsApplicable;
        $this->bIsApplicable = $bIsApplicable;
        $this->model = $model;
        $this->entry = $entry;
    }

    /**
     * Get the view / contents that represent the component.
     * Associated view is view('components.users.tabs.action-and-title')
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('components.users.tabs.actions-and-title', [
            'routeClass' => $this->routeClass,
            'aIsApplicable' => $this->aIsApplicable,
            'bIsApplicable' => $this->bIsApplicable,
            'entry' => $this->entry,
            'model' => $this->model
        ]);
    }
}
