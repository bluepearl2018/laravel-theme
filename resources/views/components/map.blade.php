<div x-data="map()">
	<div x-ref="map" class="relative h-[600px] rounded-md border border-slate-300 shadow-lg"></div>
</div>
@once
	@push('styles')
		<link rel="stylesheet" href="{{ mix('css/map.css') }}">
	@endpush
	@push('top-scripts')
		<script src="{{ mix('js/map.js') }}"></script>
	@endpush
@endonce

