<div class="flex flex-col space-y-2 mb-4">
	<label for="{{ Str::slug($id) }}">
		{{ $label }}
	</label>
	<span class="text-xs text-gray-500 p-0.5">
		{{ $tip }}
	</span>
	<textarea
			id="{{ Str::slug($id) }}"
			name="{{ Str::snake($id) }}"
			placeholder="{{ $placeholder }}"
			{{ isset($disabled) ? 'disabled' : '' }}
			class="ckeditor rounded-md shadow-sm border-gray-300 border text-lg focus:border-yellow-300 focus:ring focus:ring-yellow-200 focus:ring-opacity-50 px-2 py-1 form-textarea">
				{{$old}}
	</textarea>
	@if(isset($errors) && $errors->has($name))
		<div class="alert alert-danger text-red-500">{{ $errors->first(Str::snake($id)) }}</div>
	@endif
</div>