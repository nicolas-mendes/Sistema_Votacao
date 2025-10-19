@props(['option'])

<button 
    type="button" 
    class="w-full text-left p-5 sm:p-6 hover:bg-surface-2 transition duration-300 ease-in-out">
        <span class="text-primary">{{ $option->text }}</span>
        <span class="text-sm text-secondary text-right">{{ $option->votes }} votos</span>
</button>