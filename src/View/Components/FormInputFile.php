<?php

namespace Eutranet\Theme\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Translation\Translator;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Str;

class FormInputFile extends Component
{

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private mixed $label;

    /**
     * @var string
     */
    private mixed $placeholder;

    /**
     * @var string
     */
    private mixed $tip;

    /**
     * @var string
     */
    private string $old;

    /**
     * @var string
     */
    private mixed $required;
    private mixed $readonly;

    /**
     * @var array|Application|Translator|string|null
     */

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($columnName, $specs, $old = NULL)
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
        return view('theme::components.form-input-file', [
            'name' => $this->name,
            'id' => $this->id,
            'label' => $this->label,
            'required' => $this->required,
            'placeholder' => $this->placeholder,
            'tip' => $this->tip,
            'old' => $this->old ?? NULL,
            'readonly' => $this->readonly
        ]);
    }
}
