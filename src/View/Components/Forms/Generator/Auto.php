<?php

namespace App\View\Components\Forms\Generator;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;
use JetBrains\PhpStorm\Pure;

class Auto extends Component
{
    /**
     * @var array
     */
    private array $fields;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    #[Pure] public function __construct($model)
    {
        $this->fields = $model::getFields();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('components.forms.generator.auto', ['fields' => $this->fields]);
    }
}
