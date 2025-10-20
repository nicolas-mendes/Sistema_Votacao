@php
    $defaults = [
        'type' => 'text',
        'class' => 'rounded-md md:rounded-xl bg-surface-2 border border-white/10 px-3 md:px-5 py-1 md:py-3 placeholder:text-secondary/50',
    ];
@endphp

<input {{ $attributes($defaults) }}>