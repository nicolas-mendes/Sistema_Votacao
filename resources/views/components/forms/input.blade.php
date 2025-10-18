@props(['label','name','value'=>''])

@php
    $defaults = [
        'label' => $label,
        'name' => $name,
        'id' => $name,
        'type' => 'text',
        'class' => 'rounded-md md:rounded-xl bg-surface-2 border border-white/10 px-3 md:px-5 py-1 md:py-3 w-full placeholder:text-secondary/50',
        'value' => old($name, $value)
    ];
@endphp

<div> 
    <x-forms.label :$name :$label />
        <input {{ $attributes($defaults) }}>
</div>