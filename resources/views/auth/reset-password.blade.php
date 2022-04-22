@extends('frontend::layouts.master')
@section('content')
	<x-auth-card>

		<x-slot name="logo">
			@component('theme::components.logos.logo', ['route' => 'welcome'])@endcomponent
		</x-slot>

		<!-- Validation Errors -->
		@isset($errors)
			<x-theme::auth.validation-errors class="mb-4" :errors="$errors"></x-theme::auth.validation-errors>
		@endisset

		<form method="POST" action="{{ route('password.update') }}">
		@csrf

		<!-- Password Reset Token -->
			<input type="hidden" name="token" value="{{ $request->route('token') }}">

			<!-- Email Address -->
			<div>
				<x-ui.forms.label for="email" :value="__('Email')"></x-ui.forms.label>

				<x-ui.forms.input id="email" class="block mt-1 w-full" type="email" name="email"
								  :value="old('email', $request->email)" required autofocus></x-ui.forms.input>
			</div>

			<!-- Password -->
			<div class="mt-4">
				<x-ui.forms.label for="password" :value="__('Password')"></x-ui.forms.label>

				<x-ui.forms.input id="password" class="block mt-1 w-full" type="password" name="password"
								  required></x-ui.forms.input>
			</div>

			<!-- Confirm Password -->
			<div class="mt-4">
				<x-ui.forms.label for="password_confirmation" :value="__('Confirm Password')"></x-ui.forms.label>

				<x-ui.forms.input id="password_confirmation" class="block mt-1 w-full"
								  type="password"
								  name="password_confirmation" required></x-ui.forms.input>
			</div>

			<div class="flex items-center justify-end mt-4">
				<x-ui.buttons.button>
					{{ __('Reset Password') }}
				</x-ui.buttons.button>
			</div>
		</form>
	</x-auth-card>
@endsection