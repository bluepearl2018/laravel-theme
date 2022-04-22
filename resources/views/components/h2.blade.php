<h2 {{ $attributes->merge(['class' => "text-2xl mb-1 border-yellow-500 border-b-2 space-y-3 block space justify-between"]) }}>
    {{ $slot ?? '' }}
</h2>
