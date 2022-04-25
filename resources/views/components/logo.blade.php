@props(['attributes'])
<a href="{{ $logoRoutePath }}">
	@isset($attributes)
		<img class="text-gray-500 font-medium text-sm h-24"
			 src="{{ asset('vendor/theme/images/eutranet-red.svg') }}" alt="{{ config('app.name') }}">
	@else
		<img class="h-12 text-gray-500 font-medium text-sm"
			 src="{{ asset('vendor/theme/images/eutranet-red.svg') }}" alt="{{ config('app.name') }}">
	@endisset
</a>