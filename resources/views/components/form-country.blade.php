@if(class_exists('Eutranet\Commons\Facades\DropdownFacade'))
	<div class="mt-4">
		{{ \Eutranet\Commons\Facades\DropdownFacade::display('commons', 'country') }}
	</div>
@endif