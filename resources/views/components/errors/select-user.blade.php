@unless($selu)
    <div class="px-2 max-w-sm mx-auto border-yellow-500 items-center flex flex-col self-center" >
        <p class="font-semibold text-lg uppercase text-center w-full">{{ __('No User selected') }}</p>
        <p>{{__('Specific operation require you to select a user.')}}</p>
        <nav class="flex flex-row text-center my-1">
            <a href="{{ route('admin.users.index') }}" class="py-0.5 px-2 bg-yellow-600 font-semibold p-0.5 border-2 inline-block max-w-sm text-gray-50 rounded-lg"><i class="fa fa-list mr-2"></i> {{ __('Users') }} </a>
            <a href="{{ route('admin.users.search') }}" class="py-0.5 px-2 bg-yellow-600 font-semibold p-0.5 border-2 inline-block max-w-sm text-gray-50 rounded-lg"><i class="fa fa-search mr-2"></i> {{ __('Search') }} </a>
        </nav>
    </div>
@endunless
