@extends('frontend::layouts.master')
@section('content')
	<x-auth-card>
		<x-slot name="logo">
			@component('theme::components.logos.logo', ['route' => 'welcome'])@endcomponent
		</x-slot>

		<div class="mb-4 text-sm text-gray-600">
			{{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
		</div>

		<!-- Validation Errors -->
		@isset($errors)
			<x-theme::auth.validation-errors class="mb-4" :errors="$errors">
			</x-theme::auth.validation-errors>
		@endisset

		<form method="POST" action="{{ route('password.confirm') }}">
		@csrf

		<!-- Password -->
			<div>
				<x-theme::label for="password" :value="__('Password')">
				</x-theme::label>

				<x-theme::input id="password" class="block mt-1 w-full"
								  type="password"
								  name="password"
								  required autocomplete="current-password"></x-theme::input>
			</div>

			<div class="flex justify-end mt-4">
				@component('theme::components.button')
					{{ __('Confirm') }}
				@endcomponent
			</div>
		</form>
	</x-auth-card>
@endsection
