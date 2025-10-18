<x-layout>
    <x-page-heading>Criar Enquete</x-page-heading>
    <x-forms.form action="/pools" method="POST">
        
        <x-forms.input 
            required    
            label="Título" 
            name="title" 
            placeholder="Ex: Enquete sobre Cinema" />

        <x-forms.input 
            required    
            label="Pergunta" 
            name="question" 
            type="text" 
            placeholder="Ex: Qual seu filme favorito?" />

        <div x-data="{ date_start: '', date_end: '' }">
            <div class="flex flex-col md:flex-row justify-between gap-x-4 gap-y-4">

                <x-forms.input 
                    required
                    label="Data de Início" 
                    name="date_start" 
                    type="datetime-local" 
                    min="{{ date('Y-m-d\TH:i') }}"
                    class="block" 
                    x-model="date_start" />
                
                <x-forms.input 
                    required
                    label="Data de Encerramento" 
                    name="date_end" 
                    type="datetime-local"
                    min="{{ date('Y-m-d\TH:i') }}" 
                    class="block" 
                    x-model="date_end" />

            </div>

            <div x-show="date_start && date_end && new Date(date_end) <= new Date(date_start)"
                 class="text-sm text-danger mt-4">
                A data de encerramento deve ser maior que a data de início.
            </div>
        </div>

        <x-forms.divider />

        <div x-data="{ options: [{ value: '' }, { value: '' }, { value: '' }] }">
            <div class="inline-flex items-center gap-x-2 mb-4">
                <span class="p-1 bg-white ms-2"></span>
                <label class="font-semibold">Opções de Resposta</label>
            </div>

            <template x-for="(option, index) in options" 
            :key="index">
                <div class="flex items-center gap-x-2 mb-2">
                    
                    <x-forms.options.input 
                        required
                        name="options[]" 
                        x-bind:placeholder="'Opção ' + (index + 1)" 
                        x-model="option.value" 
                        class="w-full" />

                    <button type="button" 
                    @click.prevent="options.splice(index, 1)" 
                    x-show="options.length > 3"
                        class="text-red-500 font-bold text-2xl">
                        &times;
                    </button>

                </div>
            </template>

            <x-button type="button" 
            @click.prevent="options.push({ value: '' })" 
            x-bind:disabled="options.length >= 10" 
                class="text-sm font-semibold text-secondary disabled:opacity-50 disabled:cursor-not-allowed mt-2">
                + Adicionar Opção
            </x-button>

            <div x-show="options.length >= 10" 
                class="text-sm text-danger mt-2">
                Limite de 10 opções atingido.
            </div>
        </div>

        <x-forms.divider class="mb-8 mt-0" />

        <x-forms.button>Criar</x-forms.button>
    </x-forms.form>
</x-layout>