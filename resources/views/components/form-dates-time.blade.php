<div class="flex flex-col space-y-2 mb-4">
    @props(['name', 'id', 'label', 'placeholder', 'tip', 'disabled' => false, 'old', 'required', 'readonly'])
    <label for="{{ $id }}">{{ trans('fields.'.$name) }}</label>
    <span class="text-xs text-gray-500 p-0.5">{{ $tip }}</span>
    <input id="{{ $id }}" type="time" name="{{ $name }}" value="{{ $old }}">
</div>
