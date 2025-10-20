@props(['label'=>''])

<div class="flex flex-col justify-between items-center text-center space-y-1 md:space-y-2 w-min md:w-full">
    <p class="font-semibold text-md sm:text-lg">{{ $label }}</p>
    <div class="py-1 px-2 md:p-3 bg-surface-2 rounded-md border font-popins text-grape-400"><span>{{ $slot }}</span></div>
</div>