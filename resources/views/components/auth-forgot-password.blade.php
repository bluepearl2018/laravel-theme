<x-theme-auth-card>
	@slot('logo')
		<x-theme-logo class="h-12"></x-theme-logo>
	@endslot

	<div class="mb-4 text-sm text-gray-600">
		{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
	</div>

	<!-- Session Status -->
	<x-theme-auth-session-status class="mb-4" :status="session('status')"></x-theme-auth-session-status>

	<!-- Validation Errors -->
	@isset($errors)
		<x-theme-auth-validation-errors class="mb-4" :errors="$errors"></x-theme-auth-validation-errors>
	@endisset

	<form method="POST" action="{{ $passwordEmailRoute }}">
		@csrf
		<!-- Email Address -->
		<div>
			<x-theme-form-label for="email" :value="__('Email')"></x-theme-form-label>
			<x-theme-form-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
								required autofocus></x-theme-form-input>
		</div>
		<div class="flex items-center justify-end mt-4">
			<x-theme-auth-button>
				{{ __('Email Password Reset Link') }}
			</x-theme-auth-button>
		</div>
	</form>
</x-theme-auth-card>