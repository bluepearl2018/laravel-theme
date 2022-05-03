<?php

namespace Eutranet\Theme\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Translation\Translator;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormInputPhone extends Component
{
    private $name;
    private $label;
    private $id;
    private $placeholder;
    private $tip;
    private $old;

    /**
     * @var mixed
     */
    private $required;
    /**
     * @var mixed|null
     */
    private mixed $readonly;
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
        $this->id = \Str::slug($columnName);
        $this->label = trans('fields.'.$this->name);
        $this->required = $specs[2] ?? null;
        $this->placeholder = $specs[3] ?? null;
        $this->tip = $specs[4] ?? null;
        $this->old = $old;
        $this->readonly = $specs[5] ?? null;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('theme::components.form-input-phone', [
            'name' => $this->name,
            'id' => $this->id,
            'label' => $this->label,
            'required' => $this->required,
            'placeholder' => $this->placeholder,
            'tip' => $this->tip,
            'old' => $this->old,
            'readonly' => $this->readonly
        ]);
    }
}
