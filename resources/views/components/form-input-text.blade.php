<div class="flex flex-col space-y-2 mb-4">
	<label for="{{ $id }}">{{ $label }}</label>
	<span class="text-xs text-gray-500 p-0.5">{{ $tip }}</span>
	<input
			id="{{ $id }}"
			class="rounded-md shadow-sm border-gray-300 border text-lg focus:border-yellow-300 focus:ring focus:ring-yellow-200 focus:ring-opacity-50 px-2 py-1"
			value="{{ $old }}"
			type="text"
			name="{{ Str::replace('-', '_', $id) }}"
			placeholder="{{ $placeholder }}"
			{{ $required == 'required' ? 'required' : '' }}
			{{ $readonly == 'readonly'? 'readonly' : '' }}
	">
	@if(isset($errors) && $errors->has(Str::replace('-', '_', $id)))
		<div class="alert alert-danger text-red-500">{{ $errors->first(Str::replace('-', '_', $id)) }}</div>
	@endif
</div>
