@extends('theme::components.skeleton')
@section('app')
	@component('theme::components.menus.mobile-menu')@endcomponent
	@component('theme::components.menus.static-sidebar')@endcomponent

	<div class="lg:pl-64 flex flex-col flex-1 max-w-7xl">
		<div class="relative z-40 flex-shrink-0 flex h-16 bg-white border-b border-gray-200 lg:border-none">
			<!-- Sidebar toggle, controls the 'sidebarOpen' sidebar state. -->
			@component('theme::components.menus.toggle-sidebar-button')@endcomponent
			@component('theme::components.search.search-bar')@endcomponent
		</div>
		<main class="flex-1 pb-8 bg-gray-100 h-full">
			@component('theme::components.headers.dashboard-header')@endcomponent
			<div class="mt-8">
				<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
					@yield('content')
				</div>
			</div>
		</main>
	</div>
@endsection