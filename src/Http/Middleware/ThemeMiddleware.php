<?php

namespace Eutranet\Theme\Http\Middleware;

use Auth;
use Closure;
use Flash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ThemeMiddleware
{
	/**
	 * Handle an incoming request.
	 *
	 * @param Request $request
	 * @param Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
	 * @return Response|RedirectResponse
	 */
	public function handle(Request $request, Closure $next): Response|RedirectResponse
	{
		return $next($request);
	}
}
