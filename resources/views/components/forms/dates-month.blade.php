@props(['name', 'id', 'label', 'placeholder', 'tip', 'disabled' => false, 'old', 'required', 'readonly'])
<div class="flex flex-col space-y-2 mb-4">
    <label for="{{$id}}">{{ trans('fields.'.$name) }}</label>
    <span class="text-xs text-gray-500 p-0.5">{{ $tip }}</span>
    <input id="{{$id}}"
           class="rounded-md shadow-sm border-gray-300 border text-lg focus:border-yellow-300 focus:ring focus:ring-yellow-200 focus:ring-opacity-50 px-2 py-1"
           value="{{ $old }}"
           required
           pattern="[0-9]{4}-[0-9]{2}"
           min="1930-01" max="{{ now()->format('Y-m') }}"
           type="month" name="{{$name}}">
    @if(isset($errors) && $errors->has($name))
        <div class="alert alert-danger text-red-500">{{ $errors->first($name) }}</div>
    @endif
</div>
