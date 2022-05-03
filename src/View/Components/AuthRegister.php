<?php

namespace Eutranet\Theme\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\View\View;

class AuthRegister extends Component
{
    private string $registerRoutePath;
    private string $loginRoutePath;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (Route::has('register')) {
            $this->registerRoutePath = route('register');
        } else {
            $this->registerRoutePath = route('welcome');
        }

        if (Route::has('login')) {
            $this->loginRoutePath = route('login');
        } else {
            $this->loginRoutePath = route('welcome');
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('theme::components.auth-register', [
            'loginRoutePath' => $this->loginRoutePath,
            'registerRoutePath' => $this->registerRoutePath
        ]);
    }
}
