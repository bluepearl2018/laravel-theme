<?php

namespace Eutranet\Theme\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Log;
use Illuminate\Support\Facades\Schema;
use Eutranet\Corporate\Models\Corporate;

class FooterLogo extends Component
{
    private mixed $corporate;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($assetImgUrl = NULL)
    {
		if(isset($assetImgUrl))
		{
			$this->assetImgUrl = $assetImgUrl;
		} else {
			$this->assetImgUrl = asset('/images/logo.svg');
		}
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('theme::components.footer-logo', ['assetImgUrl' => $this->assetImgUrl]);
    }
}
