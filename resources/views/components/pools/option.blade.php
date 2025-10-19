@props(['option'])

<label for="option-{{ $option->id }}" 
       class="flex justify-between items-center p-4 sm:p-5 border-1 border-grape-900 bg-surface-2/30 rounded-lg 
       hover:bg-surface-2 transition duration-300 cursor-pointer has-[:checked]:bg-grape-700/25 has-[:checked]:border-grape-800">

    <div class="flex flex-1 items-center justify-between pe-4">
           <span class="font-medium text-primary">{{ $option->text }}</span>
           <span class="text-sm text-secondary">{{ $option->votes }} votos</span>
    </div>

    <input type="radio" id="option-{{ $option->id }}" name="option_id" value="{{ $option->id }}"
        class="h-5 w-5 text-grape-600 border-gray-500 focus:ring-grape-500 cursor-pointer">
</label>
