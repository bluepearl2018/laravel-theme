<div class="flex flex-col space-y-2 mb-4">
	@props(['name', 'id', 'label', 'placeholder', 'tip', 'disabled' => false, 'old'])
	<label for="{{ $id }}">{{ $name }}</label>
	<span class="text-xs text-gray-500 p-0.5">{{ $tip  }}</span>
	<input maxlength="9" minlength="9" value="{{$old}}" type="text" placeholder="{{ $placeholder }}" name="{{ $name }}"
		   id="{{ $id }}"
		   {{ $disabled ? 'disabled' : '' }} class="rounded-md shadow-sm border-gray-300 border text-lg focus:border-yellow-300 focus:ring focus:ring-yellow-200 focus:ring-opacity-50 px-2 py-1 "/>
	@if(isset($errors) && $errors->has($name))
		<div class="alert alert-danger text-red-500">{{ $errors->first($name) }}</div>
	@endif
</div>
