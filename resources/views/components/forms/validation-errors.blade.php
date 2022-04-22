@props(['errors'])
@isset($errors)
	@if ($errors->any())
		<div class="col-span-full">
			<div {{ $attributes }}>
				<div class="font-medium text-red-600">
					{{ __('Whoops! Something went wrong.') }}
				</div>
				<ul class="mt-3 list-disc list-inside text-sm text-red-600">
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		</div>
	@endif
@endisset
