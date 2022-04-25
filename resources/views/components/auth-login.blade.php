<x-theme-auth-card>
	@slot('logo')
		<x-theme-logo class="h-12"></x-theme-logo>
	@endslot
	<!-- Session Status -->
	<x-theme-auth-session-status class="mb-4"></x-theme-auth-session-status>
	<!-- Validation Errors -->
	@isset($errors)
		<x-theme-auth-validation-errors class="mb-4" :errors="$errors"></x-theme-auth-validation-errors>
	@endisset
	<form method="POST" action="{{$loginRoutePath}}">
	@csrf
	<!-- Email Address -->
		<div>
			<x-theme-form-label for="email" :value="__('Email')"></x-theme-form-label>
			<x-theme-form-input id="email" class="block mt-1 w-full" type="email" name="email"
							:value="old('email')" required autofocus>
			</x-theme-form-input>
		</div>

		<!-- Password -->
		<div class="mt-4">
			<x-theme-form-label for="password" :value="__('Password')">

			</x-theme-form-label>
			<x-theme-form-input id="password" class="block mt-1 w-full"
							type="password"
							name="password"
							required autocomplete="current-password">
			</x-theme-form-input>
		</div>
		<!-- Remember Me -->
		<div class="block mt-4">
			<label for="remember_me" class="inline-flex items-center">
				<input id="remember_me" type="checkbox"
					   class="rounded border-gray-300 text-yellow-600 shadow-sm focus:border-yellow-300 focus:ring focus:ring-yellow-200 focus:ring-opacity-50"
					   name="remember">
				<span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
			</label>
		</div>
		<div class="flex items-center justify-end mt-4">
			@if(Route::has('password.request'))
				<a class="underline text-sm text-gray-600 hover:text-gray-900"
				   href="{{ route('password.request') }}">
					{{ __('Forgot your password?') }}
				</a>
			@endif
			<x-theme-auth-button class="ml-3">
				{{ __('Log in') }}
			</x-theme-auth-button>
		</div>
	</form>
</x-theme-auth-card>