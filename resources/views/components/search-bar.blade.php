<!-- Search bar -->
<div class="flex-1 px-4 flex justify-between sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8">
	<div class="flex-1 flex">
		<form class="w-full flex md:ml-0" action="#" method="GET">
			<label for="search-field" class="sr-only">{{__('Search')}}</label>
			<div class="relative w-full text-gray-400 focus-within:text-gray-600">
				<div class="absolute inset-y-0 left-0 flex items-center pointer-events-none" aria-hidden="true">
					<!-- Heroicon name: solid/search -->
					<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
						<path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
					</svg>
				</div>
				<input id="search-field" name="search-field" class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-0 focus:border-transparent sm:text-sm" placeholder="Search transactions" type="search">
			</div>
		</form>
	</div>
	<div class="ml-4 flex items-center md:ml-6">
		<button type="button" class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
			<span class="sr-only">{{__('View notifications')}}</span>
			<!-- Heroicon name: outline/bell -->
			@if(Auth::user()->unreadNotifications()->count() > 0)
				<a href="{{ route('setup.my-user-notifications', Auth::user()) }}">
					<i class="h-4 w-6 fa fa-bell text-red-500"></i>
				</a>
			@else
				<a href="{{ route('setup.my-user-notifications', Auth::user()) }}">
					<i class="items-center fa fa-bell mr-2 text-lg"></i>
				</a>
			@endif
		</button>

		<!-- Profile dropdown -->
		<div x-data="{userMenu: false}" class="ml-3 relative">
			<div>
				<button @click="userMenu = !userMenu" type="button" class="max-w-xs bg-white rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 lg:p-2 lg:rounded-md lg:hover:bg-gray-50" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
					@if(file_exists(asset('images/avatar.jpg')))
						<img class="h-8 w-8 rounded-full" src="{{ asset('images/avatar.jpg') }}" alt="user avatar">
					@endif
					<span class="hidden ml-3 text-gray-700 text-sm font-medium lg:block"><span class="sr-only">Open user menu for </span>{{ Auth::user()->name }}</span>
					<!-- Heroicon name: solid/chevron-down -->
					<svg class="hidden flex-shrink-0 ml-1 h-5 w-5 text-gray-400 lg:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
						<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
					</svg>
				</button>
			</div>

			<!--
			  Dropdown menu, show/hide based on menu state.

			  Entering: "transition ease-out duration-100"
				From: "transform opacity-0 scale-95"
				To: "transform opacity-100 scale-100"
			  Leaving: "transition ease-in duration-75"
				From: "transform opacity-100 scale-100"
				To: "transform opacity-0 scale-95"
			-->
			<div x-show="userMenu" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
				<!-- Active: "bg-gray-100", Not Active: "" -->
				<a href="{{ route('setup.my-user-notifications', Auth::user()) }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">
					{{__('My profile') }}
				</a>
				<a href="{{ route('setup.my-preferences', Auth::user()) }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">
					{{__('My preferences') }}
				</a>
				<span class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">
					<form id="logout-frm" action="{{ route('logout') }}" method="POST">
						@csrf
						<button type="submit">{{ __('Logout') }}</button>
					</form>
				</span>
			</div>
		</div>
	</div>
</div>