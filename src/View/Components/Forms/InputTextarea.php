<?php

namespace App\View\Components\Forms;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Translation\Translator;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Str;

class InputTextarea extends Component
{
	private string $name;
	private string $label;
	private string $id;
	private string $placeholder;
	private string $tip;
	private mixed $old;

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
		$this->label = trans('fields.' . $this->name);
		$this->required = $specs[2];
		$this->placeholder = $specs[3];
		$this->tip = $specs[4];
		$this->old = $old;
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return Application|Factory|View
	 */
	public function render()
	{
		return view('components.forms.input-textarea', [
			'name' => $this->name,
			'id' => $this->id,
			'label' => $this->label,
			'required' => $this->required,
			'placeholder' => $this->placeholder,
			'tip' => $this->tip,
			'old' => $this->old
		]);
	}
}
