<div class="flex flex-col space-y-2 w-full">
	<label for="phone">{{ __('Phone') }}</label>
	<span class="text-xs text-gray-500 p-0.5">{{ __('Enter a valid phone number')  }}</span>
	<input maxlength="14" minlength="9" value="{{ old('phone') }}" type="text" name="phone"
		   placeholder="{{ __('+352.789456123')  }}" id="phone"
		   class="rounded-md shadow-sm border-gray-300 border text-lg focus:border-yellow-300
			focus:ring focus:ring-yellow-200 focus:ring-opacity-50 px-2 py-1"
		   required/>
	@if(isset($errors) && $errors->has('phone'))
		<div class="alert alert-danger text-red-500">{{ $errors->first('phone') }}</div>
	@endif
</div>
