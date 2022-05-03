<?php

namespace Eutranet\Theme\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\View\View;

class AuthVerifyEmail extends Component
{
    private string $verificationSendRoute;
    private string $logoutRoute;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (Route::has('verification.send')) {
            $this->verificationSendRoute = route('verification.send');
        } else {
            $this->verificationSendRoute = route('welcome');
        }

        if (Route::has('logout')) {
            $this->logoutRoute = route('logout');
        } else {
            $this->logoutRoute = route('welcome');
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('theme::components.auth-verify-email', [
            'logoutRoute' => $this->logoutRoute,
            'verificationSendRoute' => $this->verificationSendRoute
        ]);
    }
}
