@extends('frontend::layouts.master')
@section('content')
	<x-theme-auth-card>
		@slot('logo')
			<x-theme-logo class="h-12"></x-theme-logo>
		@endslot
		<div class="mb-4 text-sm text-gray-600">
			{{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
		</div>
		<!-- Validation Errors -->
		@isset($errors)
			<x-theme-auth-validation-errors class="mb-4" :errors="$errors">
			</x-theme-auth-validation-errors>
		@endisset

		<form method="POST" action="{{ route('password.confirm') }}">
		@csrf

		<!-- Password -->
			<div>
				<x-theme-form-label for="password" :value="__('Password')">
				</x-theme-form-label>

				<x-theme-form-input id="password" class="block mt-1 w-full"
								type="password"
								name="password"
								required autocomplete="current-password"></x-theme-form-input>
			</div>

			<div class="flex justify-end mt-4">
				<x-theme-auth-button>{{ __('Confirm') }}</x-theme-auth-button>
			</div>
		</form>
	</x-theme-auth-card>
@endsection
