<?php

namespace Eutranet\Theme\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;
use Laracasts\Flash\Flash;

class ThemeController extends Controller
{
	public function __construct()
	{
		$this->middleware(['auth:admin', 'role:super-admin']);
	}

	public function index(): Factory|View|Application
	{
		return view('theme::index');
	}
}