<a href="{{route('setup.dashboard')}}"
   class="group flex items-center px-2 py-2 text-sm leading-6 font-medium @if(!Route::is('setup.dashboard')) text-white group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md @else text-gray-100 hover:text-white hover:bg-gray-600 px-2 py-2 text-sm leading-6 font-medium rounded-md @endif" aria-current="page">
	<i class="fa fa-home text-xl mr-4 @if(Route::is('setup.dashboard')) text-yellow-100 @else text-white-50 @endif"></i>
	{{__('Home') }}
</a>
<a href="{{route('setup.installation')}}"
   class="group flex items-center px-2 py-2 text-sm leading-6 font-medium @if(!Route::is('setup.installation')) text-white group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md @else text-gray-100 hover:text-white hover:bg-gray-600 px-2 py-2 text-sm leading-6 font-medium rounded-md @endif" aria-current="page">
	<i class="fa fa-cogs text-xl mr-4 @if(Route::is('setup.installation')) text-yellow-100 @else text-white-50 @endif"></i>
	{{__('Installation') }}
</a>
<a href="{{route('setup.config-corporate')}}"
   class="group flex items-center px-2 py-2 text-sm leading-6 font-medium @if(!Route::is('setup.config-corporate')) text-white group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md @else text-gray-100 hover:text-white hover:bg-gray-600 px-2 py-2 text-sm leading-6 font-medium rounded-md @endif" aria-current="page">
	<i class="fa fa-coffee text-xl mr-4 @if(Route::is('setup.config-corporate')) text-yellow-100 @else text-white-50 @endif"></i>
	{{__('Config corporate') }}
</a>