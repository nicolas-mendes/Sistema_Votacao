<x-layout>
    <div class="flex flex-col items-center justify-center min-h-[60vh] text-center px-4">
        <x-page-heading>
            Sistema CRUD de Enquetes
        </x-page-heading>

        <p class="mt-4 text-lg text-gray-700 dark:text-gray-300 max-w-xl">
            Bem-vindo! Este é um sistema simples construído em Laravel e Tailwind CSS 
            para Criar, Ler, Atualizar e Deletar (CRUD) enquetes.
        </p>

        <div class="mt-8">
            <a href="{{ route('pools.index') }}" 
               class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-md text-lg font-medium shadow-md transition ease-in-out duration-150">
                Ver todas as Enquetes
            </a>
        </div>

    </div>
</x-layout>