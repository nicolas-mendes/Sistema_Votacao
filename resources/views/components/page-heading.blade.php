@props([
    'size' => 'text-2xl md:text-4xl',
    'margin' => 'mt-2 mb-6 md:mb-8',
    'align' => 'text-center',
    'weight' => 'font-bold',
])

<div class="break-words w-xs md:w-xl justify-self-center">
    <h1 {{ $attributes->merge(['class' => ''])->class([$weight, $align, $size, $margin]) }}>
        {{ $slot }}
    </h1>
</div>
