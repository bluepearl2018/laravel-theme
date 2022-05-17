<div>
	<div class="text-xs italic bg-gray-200">
		{{ __('fields.'.$key) }}
	</div>
	<div style="padding-left:4px" class=" mb-2">
		@if($values[0] == 'select')
			{{ $values[5]::find($entries[$key])?->name ?: 'NC' }}
		@elseif($values[0] == 'checkbox')
			{{ $entries[$key] === '1' ? 'Sim' : 'Não' }}
		@elseif($values[1] == 'text')
			{{ $entries[$key] ?: 'NC' }}
		@elseif($values[1] == 'textarea')
			{!! html_entity_decode($entries[$key]) ?: 'NC' !!}
		@elseif($values[1] == 'date')
			@if($entries[$key])
				{{\Carbon\Carbon::createFromDate($entries[$key])?->format('d F Y')}}
			@else
				{{ __('NC') }}
			@endif
		@else
			{{ $entries[$key] ?: 'NC' }}
		@endif
	</div>
</div>