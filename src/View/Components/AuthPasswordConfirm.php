<?php

namespace Eutranet\Theme\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\View\View;

class AuthPasswordConfirm extends Component
{
    private string $passwordConfirmRoute;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (Route::has('register')) {
            $this->passwordConfirmRoute = route('password.confirm');
        } else {
            $this->passwordConfirmRoute = route('welcome');
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('theme::components.auth-password-confirm', [
            'passwordConfirmRoute' => $this->passwordConfirmRoute
        ]);
    }
}
