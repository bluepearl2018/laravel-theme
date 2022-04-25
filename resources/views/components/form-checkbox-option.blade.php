<div class="flex flex-col my-4">
	<input type="hidden" id="{{ Str::slug($id) }}" name="{{ Str::snake($id) }}" value="{{$old}}"/>
	<label for="{{ Str::slug($id) }}-cb">
		{{ $label }}
		<input id="{{ Str::slug($id) }}-cb"
			   type="checkbox"
			   class="rounded-md shadow-sm border-gray-300 border text-lg focus:border-yellow-300 focus:ring focus:ring-yellow-200 focus:ring-opacity-50 px-2 py-1"
			   @if($old) checked @endif
		/>
	</label>
	<span class="mr-auto text-xs text-gray-500 p-0.5">{{ $tip }}</span>
	@if(isset($errors) && $errors->has(Str::snake($id)))
		<div class="alert alert-danger text-red-500">{{ $errors->first(Str::snake($id)) }}</div>
	@endif
</div>
@push('bottom-scripts')
	<script defer>
        const {{ Str::camel(Str::slug($id)) }} = document.getElementById('{{Str::snake(Str::slug($id))}}');
        document.getElementById('{{Str::slug($id)}}-cb').addEventListener('change', function (e) {
            document.getElementById('{{Str::slug($id)}}').setAttribute('value', '0');
            if (document.getElementById('{{Str::slug($id)}}-cb').checked) {
                document.getElementById('{{Str::slug($id)}}').setAttribute('value', '1');
            }
            console.log(document.getElementById('{{Str::slug($id)}}').value);
        });
	</script>
@endpush
