<?php

namespace Eutranet\Theme\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Log;
use Eutranet\Corporate\Models\Corporate;
use Illuminate\Support\Facades\Schema;

class FooterAddress extends Component
{
    private mixed $corporate;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Corporate $model, $id = null)
    {
        $this->corporate = null;
        if (Schema::hasTable('corporates')) {
            if ($id) {
                $this->corporate = $model::find($id) ?? $model::find(1);
            }
            Log::critical('Missing Corporate entry with id ' . $id . ' in order to display laravel-corporate address');
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('theme::components.footer-address', ['corporate' => $this->corporate]);
    }
}
