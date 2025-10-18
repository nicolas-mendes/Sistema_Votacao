@props(['name', 'label'])

<div class="inline-flex items-center gap-x-2 my-1">
    <span class="p-1 bg-white ms-2"></span>
    <label class="font-semibold text-white" for="{{ $name }}">{{ $label }}</label>
</div>
