<x-layout>
    <x-page-heading>Editar Enquete</x-page-heading>
    <x-forms.form :action="route('pools.update', $pool)" method="POST">
        @method('PATCH')
        <x-forms.input required label="Título" name="title" placeholder="Ex: Enquete sobre Cinema" :value="$pool->title" />

        <x-forms.input required label="Pergunta" name="question" type="text" placeholder="Ex: Qual seu filme favorito?"
            :value="$pool->question" />

        <div x-data="{ date_start: '{{ $pool->date_start->format('Y-m-d\TH:i') }}', date_end: '{{ $pool->date_end->format('Y-m-d\TH:i') }}' }">
            <div class="flex flex-col md:flex-row justify-between gap-x-4 gap-y-4">

                <x-forms.input required label="Data de Início" name="date_start" type="datetime-local"
                class="block" x-model="date_start" />

                <x-forms.input required label="Data de Encerramento" name="date_end" type="datetime-local"
                class="block" x-model="date_end" />

            </div>

            <div x-show="date_start && date_end && new Date(date_end) <= new Date(date_start)"
                class="text-sm text-danger mt-4">
                A data de encerramento deve ser maior que a data de início.
            </div>
        </div>

        <x-forms.divider />

        <div x-data="{ options: {{ $pool->options->map(fn($opt) => ['id' => $opt->id, 'text' => $opt->text])->toJson() }} }">
            <div class="inline-flex items-center gap-x-2 mb-4">
                <span class="p-1 bg-white ms-2"></span>
                <label class="font-semibold">Opções de Resposta</label>
            </div>

            <template x-for="(option, index) in options" :key="index">
                <div class="flex items-center gap-x-2 mb-2">

                    <input type="hidden" :name="'options[' + index + '][id]'" :value="option.id">

                    <x-forms.options.input 
                        required 
                        x-bind:name="'options[' + index + '][text]'" 
                        x-bind:placeholder="'Opção ' + (index + 1)"
                        x-model="option.text" 
                        class="w-full" />

                    <button type="button" @click.prevent="options.splice(index, 1)" x-show="options.length > 3"
                        class="text-red-500 font-bold text-2xl">
                        &times;
                    </button>

                </div>
            </template>

            <x-button type="button" @click.prevent="options.push({ id: null, text: '' })"
                x-bind:disabled="options.length >= 10"
                class="text-sm font-semibold text-secondary disabled:opacity-50 disabled:cursor-not-allowed mt-2">
                + Adicionar Opção
            </x-button>

            <div x-show="options.length >= 10" class="text-sm text-danger mt-2">
                Limite de 10 opções atingido.
            </div>
            </div>

            <x-forms.divider class="mb-8 mt-0" />

            <x-forms.button>Editar</x-forms.button>
    </x-forms.form>
</x-layout>
