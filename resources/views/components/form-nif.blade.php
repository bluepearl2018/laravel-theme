<div class="flex flex-col space-y-2 w-full">
	<label for="nif">{{ __('NIF') }}</label>
	<span class="text-xs text-gray-500 p-0.5">{{ __('Enter a valid tax ID')  }}</span>
	<input maxlength=9" minlength="9" value="{{ old('nif') }}" type="text" name="nif"
		   placeholder="{{ __('123456XXX')  }}" id="nif"
		   class="rounded-md shadow-sm border-gray-300 border text-lg focus:border-yellow-300
			focus:ring focus:ring-yellow-200 focus:ring-opacity-50 px-2 py-1"
		   required/>
	@if(isset($errors) && $errors->has('nif'))
		<div class="alert alert-danger text-red-500">{{ $errors->first('nif') }}</div>
	@endif
</div>
