<?php

namespace Eutranet\Theme\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\View\View;

class AuthResetPassword extends Component
{
    private string $resetPasswordRoute;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (Route::has('register')) {
            $this->resetPasswordRoute = route('password.update');
        } else {
            $this->resetPasswordRoute = route('welcome');
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('theme::components.auth-reset-password', [
            'resetPasswordRoute' => $this->resetPasswordRoute
        ]);
    }
}
