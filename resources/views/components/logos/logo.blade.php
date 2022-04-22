<a href="{{ route($route) }}">
	@isset($attributes)
		<img class="{{ $attributes->merge(['class' => 'fill-current text-gray-500 font-medium text-sm']) }}"
			 src="{{ asset('images/logo.svg') }}" alt="{{ config('app.name') }}">
	@else
		<img class="h-8 fill-current text-gray-500 font-medium text-sm"
			 src="{{ asset('images/logo.svg') }}" alt="{{ config('app.name') }}">
	@endisset
</a>