@extends('frontend::layouts.master')
@section('content')
	<x-auth-card>
		<x-slot name="logo">
			@component('theme::components.logos.logo', ['route' => 'welcome'])@endcomponent
		</x-slot>

		<div class="mb-4 text-sm text-gray-600">
			{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
		</div>

		<!-- Session Status -->
		<x-auth.session-status class="mb-4" :status="session('status')"></x-auth.session-status>

		<!-- Validation Errors -->
		@isset($errors)
			<x-theme::auth.validation-errors class="mb-4" :errors="$errors"></x-theme::auth.validation-errors>
		@endisset

		<form method="POST" action="{{ route('password.email') }}">
		@csrf

		<!-- Email Address -->
			<div>
				<x-ui.forms.label for="email" :value="__('Email')"></x-ui.forms.label>
				<x-ui.forms.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
								  required autofocus></x-ui.forms.input>
			</div>

			<div class="flex items-center justify-end mt-4">
				@component('theme::components.button')
					{{ __('Email Password Reset Link') }}
				@endcomponent
			</div>
		</form>
	</x-auth-card>
@endsection
