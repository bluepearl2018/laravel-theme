<?php

namespace App\View\Components\Users\Tabs;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Session;

class Judicial extends Component
{
    private $resource;
    // private null $entry;

    /**
     * New component instance for the view
     * view('components.users.tabs.judicial')
     *
     */
    public function __construct($resource, ?User $user)
    {
        $this->resource = $resource;
        // $this->entry = Session::get('users.userSelected')->userJudicials ?? NULL;
    }

    /**
     * Get the view / contents that represent the component.
     * Associated view is view('components.users.tabs.judicial')
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('components.users.tabs.judicial', [
            'resource' => $this->resource,
            // 'entry' => $this->entry,
        ]);
    }
}
