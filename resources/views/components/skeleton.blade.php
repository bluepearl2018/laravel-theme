<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-screen">
	@component('theme::laravel-frontend.resources.views.components.seo.meta')@endcomponent
	<body class="h-screen">
		<div x-data="{mobileMenu: false}" class="min-h-full mx-auto max-w-7xl bg-gray-100 relative">
			@yield('app')
			<div class="lg:pl-64 flex w-full lg:relative flex-col flex-1 max-w-7xl">
				@component('theme::partials.footer')@endcomponent
			</div>
		</div>
		@stack('bottom-scripts')
	</body>
</html>