<footer class="bg-white" aria-labelledby="footer-heading">
	<h2 id="footer-heading" class="sr-only">{{__('Footer')}}</h2>
	<div class="max-w-7xl mx-auto py-12 px-8 sm:px-6 lg:py-16 lg:px-8">
		<div class="xl:grid xl:grid-cols-3 xl:gap-8">
			<div class="space-y-8 xl:col-span-1">
				<img class="h-10" src="{{ asset('images/logo.svg') }}" alt="{{ config('app.name') }}">
				<p class="text-gray-500 text-base">{{ config('eutranet-setup.baseline') }}</p>
				<div class="flex space-x-6">
					@if(Route::has('youtube'))
						<a href="{{ route('youtube') }}" class="text-gray-400 hover:text-gray-500">
							<span class="sr-only">Youtube</span>
							<i class="fab fa-youtube"></i>
						</a>
					@endif
					@if(Route::has('instagram'))
						<a href="{{ route('instagram') }}" class="text-gray-400 hover:text-gray-500">
							<span class="sr-only">Instagram</span>
							<i class="fab fa-instagram"></i>
						</a>
					@endif
					@if(Route::has('linkedin'))
						<a href="{{ route('linkedin') }}" class="text-gray-400 hover:text-gray-500">
							<span class="sr-only">Linkedin</span>
							<i class="fab fa-linkedin"></i>
						</a>
					@endif
				</div>
			</div>
			<div class="py-6 sm:py-0 sm:mb-4 sm:mt-12 grid grid-cols-2 xl:mt-0 xl:col-span-2">
				<div class="col-span-full sm:col-span-1">
					<x-theme::footers.address :id="1"></x-theme::footers.address>
				</div>
				<div class="col-span-full sm:col-span-1">
					<x-theme::footers.address :id="2"></x-theme::footers.address>
				</div>
			</div>
		</div>
		<div class="pt-6 border-t border-gray-200 block">
			<p class="text-base text-gray-400 xl:text-center">
				&copy; {{ date('Y') }} {{ config('corporate.name') }}
				, {{ __('All rights reserved') }}</p>
		</div>
	</div>
</footer>
