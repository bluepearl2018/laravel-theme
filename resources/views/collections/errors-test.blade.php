@extends('theme::layouts.master')
@section('content')
	<h2 class="border-b-4 p-2 text-xl bg-gray-300 text-gray-800">Validation errors</h2>
	<div class="flex flex-col">
		<div>
			<x-theme-auth-validation-errors></x-theme-auth-validation-errors>
		</div>
		<form method="POST" action="{{ route("theme.components.test-validation-errors") }}">
			@csrf
			<div class="my-2">
				<x-theme-form-label for="email" :value="__('Email')"></x-theme-form-label>
				<x-theme-form-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
									required autofocus></x-theme-form-input>
			</div>
			<x-theme-button class="my-2 p-1 bg-green-100" type="submit">Test</x-theme-button>
		</form>
	</div>
@endsection