@props(['attributes'])
<h1 {{ $attributes->merge(['class' => "text-2xl mb-2 border-l-4 pl-2 text-gray-800 font-extrabold border-yellow-500"]) }}>
            <span class="flex flex-col">
                {{ $slot ?? '' }}
            </span>
    {{ $action ?? '' }}
</h1>
