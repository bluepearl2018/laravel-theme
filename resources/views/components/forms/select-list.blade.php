<div class="flex flex-col space-y-2 mb-4">
	@props(['name', 'id', 'label', 'placeholder', 'tip', 'required', 'disabled' => false, 'old', 'model', 'readonly'])
	<label for="{{$id}}">{{ $label }}</label>
	<span class="text-xs text-gray-500 p-0.5">{{ $tip  }}</span>
	<select type="select" id="{{$id}}" name="{{$name}}"
			class="form-select  bg-white " {{$required == 'required' ? 'required' : ''}} {{ $readonly == 'readonly' ? 'disabled' : '' }}>
		<option value="">{{ __('Select') }}</option>
		@forelse($model::get() as $option)
			{{-- todo try this <option value="{{ $version }}" @selected(old('version') == $version)> --}}
			<option value="{{ $option->id }}" {!! $old == $option->id  ? 'selected' : '' !!} >
				{{ $option->name }}
			</option>
		@empty
		@endforelse
	</select>
	@if(isset($errors) && $errors->has($name))
		<div class="alert alert-danger text-red-500">{{ $errors->first($name) }}</div>
	@endif
</div>
