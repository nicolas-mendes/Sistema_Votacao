<x-layout>
    <x-page-heading>Listar Enquetes</x-page-heading>

    <section>
        <table class="block md:table md:table-fixed md:border-separate bg-surface-1/50 px-2 py-4 border-3 border-grape-700 border-separate w-full">
            <x-table.head />
            <tbody class="block md:table-row-group">
                @foreach ($pools as $pool)
                    <tr
                        class="block md:table-row mb-4 md:mb-0 border border-gray-300 md:border-none rounded-lg shadow-md md:shadow-none">
                        <x-table.data>
                            <span class="font-bold md:hidden">ID: </span>
                            {{ $pool->id }}
                        </x-table.data>
                        <x-table.data class=" break-words md:max-w-xs md:truncate">
                            <span class="font-bold md:hidden">Título: </span>
                            {{ $pool->title }}
                        </x-table.data>
                        <x-table.data class="md:max-w-xs md:truncate">
                            <span class="font-bold md:hidden">Pergunta: </span>
                            {{ $pool->question }}
                        </x-table.data>
                        <x-table.data>
                            <span class="font-bold md:hidden">Data Início: </span>
                            {{ $pool->date_start }}
                        </x-table.data>
                        <x-table.data>
                            <span class="font-bold md:hidden">Data Encerramento: </span>
                            {{ $pool->date_end }}
                        </x-table.data>
                        <x-table.data>
                            <span class="font-bold md:hidden">Status: </span>
                            {{ $pool->status }}
                        </x-table.data>
                        <x-table.data>
                            <span class="font-bold text-center md:hidden mb-2 block">Ações: </span>
                            <div class="flex flex-wrap justify-center items-center gap-2">
                                <a href="{{ route('pools.vote', $pool) }}"
                                    class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-2 py-1 rounded-md text-sm font-medium transition ease-in-out duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="size-6">
                                        <path
                                            d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75ZM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 0 1-1.875-1.875V8.625ZM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 0 1 3 19.875v-6.75Z" />
                                    </svg>
                                </a>
                                <a href="{{ route('pools.edit', $pool) }}"
                                    class="inline-block bg-green-600 hover:bg-green-700 text-white px-2 py-1 rounded-md text-sm font-medium transition ease-in-out duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="size-6">
                                        <path
                                            d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                        <path
                                            d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                                    </svg>
                                </a>
                                <form action="{{ route('pools.destroy', $pool) }}" method="POST"
                                    onsubmit="return confirm('Tem certeza que deseja excluir esta enquete?');"
                                    class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded-md text-sm font-medium transition ease-in-out duration-150">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="size-6">
                                            <path fill-rule="evenodd"
                                                d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </x-table.data>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>


    <section class="bg-surface-1/50">
        @if ($pools->hasPages())
            <div class="border-b-3 border-r-3 border-l-3 border-grape-700 px-4 py-3 sm:px-6 ">
                {{ $pools->links('pagination::tailwind') }}
            </div>
        @endif
    </section>

</x-layout>
