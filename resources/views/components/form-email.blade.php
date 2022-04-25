<div class="flex flex-col space-y-2 w-full">
	<label for="email">{{ __('Email') }}</label>
	<span class="text-xs text-gray-500 p-0.5">{{ __('Enter a valid email')  }}</span>
	<input type="email" value="{{ old('email') }}" name="email"
		   placeholder="{{ __('email@your.tld')  }}" id="email"
		   class="rounded-md shadow-sm border-gray-300 border text-lg focus:border-yellow-300
			focus:ring focus:ring-yellow-200 focus:ring-opacity-50 px-2 py-1"
		   required/>
	@if(isset($errors) && $errors->has('email'))
		<div class="alert alert-danger text-red-500">{{ $errors->first('email') }}</div>
	@endif
</div>