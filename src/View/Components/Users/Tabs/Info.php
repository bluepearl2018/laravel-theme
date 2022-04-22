<?php

namespace App\View\Components\Users\Tabs;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Info extends Component
{
    private User $user;
    /**
     * @var mixed|null
     */
    private $aInfos;
    private $bInfos;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(?User $user)
    {
        $this->user = $user;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('components.users.tabs.info', [
            'user' => $this->user,
        ]);
    }
}