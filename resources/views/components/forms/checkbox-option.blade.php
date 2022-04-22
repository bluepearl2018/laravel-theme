@props(['name', 'id', 'label', 'placeholder', 'tip', 'disabled' => false, 'old'])
<div class="flex flex-col my-4">
	<input type="hidden" id="{{ $id }}" name="{{ $name }}" value="{{$old}}"/>
	<label for="{{ $id }}-cb">
		{{ $label }}
		<input id="{{ $id }}-cb" type="checkbox" @if($old) checked
			   @endif class="rounded-md shadow-sm border-gray-300 border text-lg focus:border-yellow-300 focus:ring focus:ring-yellow-200 focus:ring-opacity-50 px-2 py-1 "/>
	</label>
	<span class="mr-auto text-xs text-gray-500 p-0.5">{{ $tip }}</span>
	@if(isset($errors) && $errors->has($name))
		<div class="alert alert-danger text-red-500">{{ $errors->first($name) }}</div>
	@endif
</div>
@push('bottom-scripts')
	<script defer>
        const {{ Str::camel($id) }} = document.getElementById('{{$id}}');
        document.getElementById('{{$id}}-cb').addEventListener('change', function (e) {
            document.getElementById('{{$id}}').setAttribute('value', '0');
            if (document.getElementById('{{$id}}-cb').checked) {
                document.getElementById('{{$id}}').setAttribute('value', '1');
            }
            console.log(document.getElementById('{{$id}}').value);
        });
	</script>
@endpush
