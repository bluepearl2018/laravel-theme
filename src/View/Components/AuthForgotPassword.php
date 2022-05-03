<?php

namespace Eutranet\Theme\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\View\View;

class AuthForgotPassword extends Component
{
    private string $passwordEmailRoute;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (Route::has('register')) {
            $this->passwordEmailRoute = route('password.email');
        } else {
            $this->passwordEmailRoute = route('welcome');
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('theme::components.auth-forgot-password', [
            'passwordEmailRoute' => $this->passwordEmailRoute
        ]);
    }
}
