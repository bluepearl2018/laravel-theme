<?php

namespace App\View\Components\Forms;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Str;

class DatesMonth extends Component
{
    private $id;
    private mixed $label;
    private mixed $required;
    private mixed $placeholder;
    private mixed $tip;
    /**
     * @var mixed|string
     */
    private mixed $readonly;
    private $old;

    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($columnName, $specs, $old)
    {
        $this->name = $columnName;
        $this->id = Str::slug($columnName);
        $this->label = trans('fields.'.$this->name);
        $this->required = $specs[2];
        $this->placeholder = $specs[3];
        $this->tip = $specs[4];
        $this->readonly = $specs[5] ?? ''; // Case it is an input...
        $this->old = $old;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('components.forms.dates-month', [
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
