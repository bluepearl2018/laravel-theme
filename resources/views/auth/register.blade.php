@extends('frontend::layouts.master')
@section('content')
	<x-auth-card>
		<x-slot name="logo">
			@component('theme::components.logos.logo', ['route' => 'welcome'])@endcomponent
		</x-slot>
		<!-- Validation Errors -->
		@isset($errors)
			<x-theme::auth.validation-errors class="mb-4" :errors="$errors">

			</x-theme::auth.validation-errors>
		@endisset

		<form method="POST" action="{{ route('register') }}">
		@csrf

			<!-- Name -->
			<div>
				<x-label for="name" :value="__('Name')" />

				<x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
			</div>

			<div class="mt-4">
				<!-- Email -->
				@component('theme::components.auth.email')@endcomponent
			</div>

			<div class="mt-4">
				<!-- Nif -->
				@component('theme::components.auth.nif')@endcomponent
			</div>

			<div class="mt-4">
				<!-- Phone -->
				@component('theme::components.auth.phone')@endcomponent
			</div>

			<div class="mt-4">
				<!-- Phone -->
				@component('theme::components.auth.country')@endcomponent
			</div>

		<!-- Password -->
			<div class="mt-4">
				<x-label for="password" :value="__('Password')" />

				<x-input id="password" class="block mt-1 w-full"
						 type="password"
						 name="password"
						 required autocomplete="new-password" />
			</div>

			<!-- Confirm Password -->
			<div class="mt-4">
				<x-label for="password_confirmation" :value="__('Confirm Password')" />

				<x-input id="password_confirmation" class="block mt-1 w-full"
						 type="password"
						 name="password_confirmation" required />
			</div>

			<div class="flex items-center justify-end mt-4">
				<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
					{{ __('Already registered?') }}
				</a>

				<x-button class="ml-4">
					{{ __('Register') }}
				</x-button>
			</div>
		</form>
	</x-auth-card>
@endsection
