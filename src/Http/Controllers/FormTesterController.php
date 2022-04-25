<?php

namespace Eutranet\Theme\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;
use Laracasts\Flash\Flash;

class FormTesterController extends Controller
{
	public function testValidationErrors(Request $request): Factory|View|Application
	{
		$rules = ['email' => 'email:rfc,dns'];
		$validated = $request->validate($rules);
		return view('theme::collections.errors-test');
	}
	public function testFlash(Request $request): Factory|View|Application
	{
		Flash::info($request->flash_message);
		Flash::success($request->flash_message);
		Flash::warning($request->flash_message);
		Flash::error($request->flash_message);
		Flash::message($request->flash_message)->overlay();
		return view('theme::collections.flash-test');
	}
}