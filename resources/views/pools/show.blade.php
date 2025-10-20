<x-layout>

    <x-page-heading class="text-grape">{{ $pool->title }}</x-page-heading>
    <x-page-heading size="text-lg md:text-2xl">{{ $pool->question }}</x-page-heading>

    <section class="mt-6 md:mt-10 max-w-2xl mx-auto bg-surface-1 shadow-lg rounded-xl">
        <div class="py-4 px-3 sm:p-6 flex justify-between">
            <x-display-time label="Data de Início:">{{ $pool->date_start->format('d/m/Y \à\s H:i') }} </x-display-time>
            <x-display-time label="Data de Encerramento:">{{ $pool->date_end->format('d/m/Y \à\s H:i') }}
            </x-display-time>
        </div>

        <x-forms.form method="POST" action="/pools/{{ $pool->id }}  ">

            @if ($pool->status === 'not started')
                <x-error class="m-0 text-center">Essa enquete ainda não começou</x-error>
            @elseif ($pool->status === 'finished')
                <x-error class="m-0 text-center">Enquete encerrada</x-error>
            @else
                <p class="m-0 text-sm text-secondary text-center">Selecione uma das opções abaixo para votar.</p>
            @endif

            <div class="px-6 pt-4 pb-0 sm:px-8 sm:pt-8 sm:pb-0">
                <fieldset>
                    <div class="space-y-3">
                        @foreach ($pool->options as $option)
                            <x-pool.option :$option />
                        @endforeach
                    </div>
                </fieldset>

                @error('option_id')
                    <x-error>
                        {{ $message }}
                    </x-error>
                @enderror

                @if (session('error'))
                    <x-error class="mb-8">
                        {{ session('error') }}
                    </x-error>
                @endif

                <div class="flex justify-between items-center mt-6 sm:mt-8">
                    <x-forms.button class="" :disabled="$pool->status !== 'in progress'">
                        @if ($pool->status !== 'in progress')
                            Votação Indisponível
                        @else
                            Confirmar Voto
                        @endif
                    </x-forms.button>
                    <a href="{{ route('pools.edit', $pool) }}"
                        class="py-2 px-8 font-bold bg-success/90 rounded-md border border-transparent hover:border-green-200 transition-colors duration-300 disabled:bg-disabled disabled:cursor-not-allowed disabled:opacity-70">
                        EDITAR
                    </a>
                </div>

            </div>
        </x-forms.form>

    </section>
</x-layout>
