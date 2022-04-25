@extends('theme::layouts.master')
@section('content')
	<h2 class="border-b-4 p-2 text-xl bg-gray-300 text-gray-800">{{__('Flash notification')}}</h2>
	<div class="flex flex-col">
		<div>
			<x-theme-flash-message></x-theme-flash-message>
		</div>
		@if(isset($title))
			<div>
				<x-theme-flash-modal></x-theme-flash-modal>
			</div>
		@endif
		<form method="POST" action="{{ route("theme.components.test-flash") }}">
			@csrf
			<div class="my-2">
				<x-theme-form-label for="flash-message" :value="__('Flash message to display')"></x-theme-form-label>
				<x-theme-form-input id="email" class="block mt-1 w-full" type="text" name="flash_message"
									value="When an unknown printer took a galley of type and scrambled it to make a type specimen book."
									required autofocus></x-theme-form-input>
			</div>
			<x-theme-button class="my-2 p-1 bg-green-100" type="submit">Test</x-theme-button>
		</form>
	</div>
@endsection