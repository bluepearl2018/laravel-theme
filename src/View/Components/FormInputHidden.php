<?php

namespace Eutranet\Theme\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Translation\Translator;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Str;

class FormInputHidden extends Component
{
    private $name;
    private $id;
    private $old;

    /**
     * @var mixed
     */
    private $required;
    /**
     * @var array|Application|Translator|string|null
     */

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($columnName, $specs, $old)
    {
        $this->name = $columnName;
        $this->id = Str::slug($columnName);
        $this->old = $old;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('theme::components.form-input-hidden', [
            'id' => $this->id,
            'name' => $this->name,
            'old' => $this->old
        ]);
    }
}
