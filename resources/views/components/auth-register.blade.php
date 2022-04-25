<x-theme-auth-card>
	@slot('logo')
		<x-theme-logo class="h-12"></x-theme-logo>
	@endslot
	<!-- Validation Errors -->
	@isset($errors)
		<x-theme-auth-validation-errors class="mb-4" :errors="$errors">

		</x-theme-auth-validation-errors>
	@endisset
	<form method="POST" action="{{ $registerRoutePath }}">
		@csrf
		<!-- Name -->
		<div>
			<x-theme-form-label for="name" :value="__('Name')"></x-theme-form-label>
			<x-theme-form-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus></x-theme-form-input>
		</div>
		<div class="mt-4">
			<!-- Email -->
			@component('theme::components.form-email')@endcomponent
		</div>
		<div class="mt-4">
			<!-- Nif -->
			@component('theme::components.form-nif')@endcomponent
		</div>
		<div class="mt-4">
			<!-- Phone -->
			@component('theme::components.form-phone')@endcomponent
		</div>
		<div class="mt-4">
			<!-- Phone -->
			@component('theme::components.form-country')@endcomponent
		</div>
		<!-- Password -->
		<div class="mt-4">
			<x-theme-form-label for="password" :value="__('Password')"></x-theme-form-label>

			<x-theme-form-input id="password" class="block mt-1 w-full"
					 type="password"
					 name="password"
					 required autocomplete="new-password"></x-theme-form-input>
		</div>
		<!-- Confirm Password -->
		<div class="mt-4">
			<x-theme-form-label for="password_confirmation" :value="__('Confirm Password')"></x-theme-form-label>

			<x-theme-form-input id="password_confirmation" class="block mt-1 w-full"
					 type="password"
					 name="password_confirmation" required></x-theme-form-input>
		</div>
		<div class="flex items-center justify-end mt-4">
			<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ $loginRoutePath }}">
				{{ __('Already registered?') }}
			</a>

			<x-theme-auth-button class="ml-4">
				{{ __('Register') }}
			</x-theme-auth-button>
		</div>
	</form>
</x-theme-auth-card>