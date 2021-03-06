<?php

namespace App\View\Components\Forms;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SendButton extends Component
{
    /**
     * @var string
     */
    private $form;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($form)
    {
        $this->form = $form ? : 'send-frm';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('theme::components.forms.send-button', ['form' => $this->form]);
    }
}
