<div class="flex flex-col space-y-2 my-4">
    @props(['name', 'id', 'label', 'placeholder', 'tip', 'disabled' => false, 'old', 'required', 'readonly'])
    <label for="{{ $id }}">{{ $label }}</label>
    <span class="text-xs text-gray-500 p-0.5">{{ $tip }}</span>
    <div x-data="{ files: null }" id="file-upload"
         class="block w-full py-2 px-3 relative bg-white appearance-none border-2 border-gray-300 border-solid rounded-md hover:shadow-outline-gray">
        <input type="file"
               value="{{$old}}"
               id="{{ $id }}"
               name="{{ $name  }}"
               class="absolute inset-0 z-50 m-0 p-0 w-full h-full outline-none opacity-0"
               x-on:change="files = $event.target.files; console.log($event.target.files);"
               x-on:dragover="$el.classList.add('active')"
               x-on:dragleave="$el.classList.remove('active')"
               x-on:drop="$el.classList.remove('active')"
                {{ $required === 'required' ? 'required' : '' }}
        >
        <template x-if="files !== null">
            <div class="flex flex-col space-y-1">
                <template x-for="(_,index) in Array.from({ length: files.length })">
                    <div class="flex flex-row items-center space-x-2">
                        <template x-if="files[index].type.includes('text/')"><i class="fas fa-file fa-fw"></i>
                        </template>
                        <template x-if="files[index].type.includes('audio/')"><i class="far fa-file-audio fa-fw"></i>
                        </template>
                        <template x-if="files[index].type.includes('application/')"><i
                                    class="far fa-file-alt fa-fw"></i></template>
                        <template x-if="files[index].type.includes('image/')"><i class="far fa-file-image fa-fw"></i>
                        </template>
                        <template x-if="files[index].type.includes('video/')"><i class="far fa-file-video fa-fw"></i>
                        </template>
                        <span class="font-medium text-gray-900" x-text="files[index].name">Uploading</span>
                        <span class="text-xs self-end text-gray-500" x-text="filesize(files[index].size)">...</span>
                    </div>
                </template>
            </div>
        </template>
        <template x-if="files === null">
            <div class="flex flex-col space-y-2 items-center justify-center">
                <i class="fas fa-cloud-upload-alt fa-2x text-gray-500"></i>
                <a href="javascript:void(0)"
                   class="flex items-center mx-auto py-2 px-4 border border-2 border-gray-100 text-gray-50 text-center font-medium border border-transparent rounded-md outline-none bg-yellow-600">{{ __('Select a file') }}</a>
            </div>
        </template>
    </div>
    @if(isset($errors) && $errors->has($name))
        <div class="alert alert-danger text-red-500">{{ $errors->first($name) }}</div>
    @endif
</div>
