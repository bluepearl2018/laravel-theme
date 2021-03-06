@extends('theme::components.skeleton')
@section('app')
	<div>
		<!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
		<div class="fixed inset-0 flex z-40 md:hidden" role="dialog" aria-modal="true">
			<!--
			  Off-canvas menu overlay, show/hide based on off-canvas menu state.

			  Entering: "transition-opacity ease-linear duration-300"
				From: "opacity-0"
				To: "opacity-100"
			  Leaving: "transition-opacity ease-linear duration-300"
				From: "opacity-100"
				To: "opacity-0"
			-->
			<div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>

			<!--
			  Off-canvas menu, show/hide based on off-canvas menu state.

			  Entering: "transition ease-in-out duration-300 transform"
				From: "-translate-x-full"
				To: "translate-x-0"
			  Leaving: "transition ease-in-out duration-300 transform"
				From: "translate-x-0"
				To: "-translate-x-full"
			-->
			<div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-white">
				<!--
				  Close button, show/hide based on off-canvas menu state.

				  Entering: "ease-in-out duration-300"
					From: "opacity-0"
					To: "opacity-100"
				  Leaving: "ease-in-out duration-300"
					From: "opacity-100"
					To: "opacity-0"
				-->
				<div class="absolute top-0 right-0 -mr-12 pt-2">
					<button type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
						<span class="sr-only">{{__('Close sidebar')}}</span>
						<!-- Heroicon name: outline/x -->
						<svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</button>
				</div>

				<div class="flex-shrink-0 flex items-center px-4">
					<x-theme-logo></x-theme-logo>
				</div>
				<div class="mt-5 flex-1 h-0 overflow-y-auto">
					<nav class="px-2 space-y-1">
					</nav>
				</div>
			</div>

			<div class="flex-shrink-0 w-14" aria-hidden="true">
				<!-- Dummy element to force sidebar to shrink to fit close icon -->
			</div>
		</div>

		<!-- Static sidebar for desktop -->
		<div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
			<!-- Sidebar component, swap this element with another sidebar if you like -->
			<div class="flex flex-col flex-grow border-r border-gray-200 pt-5 bg-white overflow-y-auto">
				<div class="flex items-center flex-shrink-0 px-4 space-x-2">
					<x-theme-logo></x-theme-logo>
				</div>
				<div class="mt-5 flex-grow flex flex-col">
					<nav class="flex-1 px-2 pb-4 space-y-1">
						<!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
						<a href="{{ route('theme.components.auth') }}" class="bg-gray-100 text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
							{{__('Authentication')}}
						</a>

						<a href="{{ route('theme.components.errors') }}" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
							{{__('Errors')}}
						</a>

						<a href="{{route('theme.components.flash')}}" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
							{{__('Flash')}}
						</a>

						<a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
							{{__('Footers')}}
						</a>

						<a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
							{{__('Forms')}}
						</a>

						<a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
							{{__('Headers')}}
						</a>

						<a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
							{{__('Logos')}}
						</a>

						<a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
							{{__('Mails')}}
						</a>

						<a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
							{{__('Menus')}}
						</a>

						<a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
							{{__('Navigation')}}
						</a>

						<a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
							{{__('search.Search')}}
						</a>

						<a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
							{{__('Seo')}}
						</a>
					</nav>
				</div>
			</div>
		</div>
		<div class="md:pl-64 flex flex-col flex-1">
			<div class="sticky top-0 z-10 flex-shrink-0 flex h-16 bg-white shadow">
				<button type="button" class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden">
					<span class="sr-only">Open sidebar</span>
					<!-- Heroicon name: outline/menu-alt-2 -->
					<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
					</svg>
				</button>
				<div class="flex-1 px-4 flex justify-between">
					<div class="flex-1 flex">
						<form class="w-full flex md:ml-0" action="#" method="GET">
							<label for="search-field" class="sr-only">Search</label>
							<div class="relative w-full text-gray-400 focus-within:text-gray-600">
								<div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
									<!-- Heroicon name: solid/search -->
									<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
									</svg>
								</div>
								<input id="search-field" class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-0 focus:border-transparent sm:text-sm" placeholder="Search" type="search" name="search">
							</div>
						</form>
					</div>
					<div x-data="{dropdownMenu : false}" class="ml-4 flex items-center md:ml-6">
						<!-- Profile dropdown -->
						<div class="ml-3 relative">
							<div>
								<button @click="dropdownMenu = !dropdownMenu" type="button" class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
									<span class="sr-only">Open user menu</span>
									<img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
								</button>
							</div>
							<div x-show="dropdownMenu" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
								<!-- Active: "bg-gray-100", Not Active: "" -->
								<a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>

								<a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>

								<a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<main class="flex-1">
				<div class="py-6">
					<div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
						<h1 class="text-2xl font-semibold text-gray-900">{{__('Components')}}</h1>
					</div>
					<div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
						<!-- Replace with your content -->
						<div class="py-4">
							<div class="border-4 border-dashed border-gray-200 rounded-lg">
								<x-theme-flash-message></x-theme-flash-message>
								@yield('content')
							</div>
						</div>
						<!-- /End replace -->
					</div>
				</div>
			</main>
		</div>
	</div>

@endsection