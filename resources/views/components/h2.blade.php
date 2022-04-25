<h2 {{ $attributes->merge(['class' => "text-2xl mb-1 border-gray-200 border-b-4 space-y-3 block space justify-between"]) }}>
    {{ $slot ?? '' }}
</h2>
