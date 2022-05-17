<div class="flex flex-col space-y-2 mb-4">
	<label for="{{Str::slug($id)}}">{{ $label }}</label>
	<span class="text-xs text-gray-500 p-0.5">{{ $tip }}</span>
	<select type="select" id="{{Str::slug($id)}}" name="{{ Str::replace('-', '_', Str::slug($id)) }}"
			class="form-select bg-white " {{$required == 'required' ? 'required' : ''}} {{ $readonly == 'readonly' ? 'disabled' : '' }}>
		<option value="">{{ __('Select') }}</option>
		@forelse($model::get() as $option)
			<option value="{{ $option->id }}" {!! $old == $option->id  ? 'selected' : '' !!} >
				{{ $option->name }}
			</option>
		@empty
		@endforelse
	</select>
	@if(isset($errors) && $errors->has(Str::replace('-', '_', Str::slug($id))))
		<div class="alert alert-danger text-red-500">{{ $errors->first(Str::replace('-', '_', Str::slug($id))) }}</div>
	@endif
</div>
