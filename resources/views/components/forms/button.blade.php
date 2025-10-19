@props(['type' => '', 'disabled' => false])




<button type="{{ $type }}"
    {{ $attributes->merge(['class' => 'flex justify-self-center md:justify-self-start py-2 px-8 font-bold bg-grape-800 rounded-md border border-transparent hover:border-grape-200 hover:text-grape-200 transition-colors duration-300 disabled:bg-disabled disabled:cursor-not-allowed disabled:opacity-70']) }}
    @disabled($disabled)>
    {{ $slot }}
</button>
    