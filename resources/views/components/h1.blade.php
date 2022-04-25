@props(['attributes'])
<h1 {{ $attributes->merge(['class' => "text-3xl text-gray-800 font-extrabold border-yellow-500"]) }}>
    <span class="flex flex-col">
        {{ $slot ?? '' }}
    </span>
    {{ $action ?? '' }}
</h1>
