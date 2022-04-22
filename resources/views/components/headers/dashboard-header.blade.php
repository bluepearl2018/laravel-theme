<!-- Page header -->
<div class="bg-white shadow">
	<div class="px-4 sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8">
		<div class="py-6 md:flex md:items-center md:justify-between lg:border-t lg:border-gray-200">
			<div class="flex-1 min-w-0">
				<!-- Profile -->
				<div class="flex items-center">
					<img class="hidden h-16 w-16 rounded-full sm:block" src="{{ asset('theme::images/eutranet.jpg') }}" alt="">
					<div>
						<div class="flex items-center">
							<h1 class="ml-3 text-2xl font-bold leading-7 text-gray-900 sm:leading-9 sm:truncate">{{ auth()->user()->name }}</h1>
						</div>
						<dl class="mt-6 flex flex-col sm:ml-3 sm:mt-1 sm:flex-row sm:flex-wrap">
							<dt class="sr-only">{{__('Role')}}</dt>
							<dd class="flex items-center text-sm text-gray-500 font-medium sm:mr-6">
								<!-- Heroicon name: solid/office-building -->
								<i class="fa fa-user-circle mr-2"></i>
								{{ auth()->user()['is_super'] ? __('With great power come big responsabilities') : __('Back-ups rule...') }}
							</dd>
							<dt class="sr-only">{{__('Account status')}}</dt>
							<dd class="mt-3 flex items-center text-sm text-gray-500 font-medium sm:mr-6 sm:mt-0 capitalize">
								<!-- Heroicon name: solid/check-circle -->
								{!! auth()->user()['email_verified_at'] !== NULL ?
									'<i class="fa fa-user-check text-green-500 mr-2"></i>' . __('Accont verified') :
									'<i class="fa fa-user-check text-red-500 mr-2"></i>' . __('Accont not verified')
								 !!}
							</dd>
						</dl>
					</div>
				</div>
			</div>
			<div class="mt-6 flex space-x-3 md:mt-0 md:ml-4">
				<a href="{{route('setup.notify-account-holders')}}" class="btn-secondary">{{__('Notify account holders')}}</a>
				<a href="{{route('setup.mail-staff')}}" class="btn-primary">{{__('Mail the staff')}}</a>
			</div>
		</div>
	</div>
</div>