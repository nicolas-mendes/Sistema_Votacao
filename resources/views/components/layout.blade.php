<!DOCTYPE html>
<html lang="en" class="h-full bg-base">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Votação</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('logo.png') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="h-full text-primary">

    <div class="px-2 sm:px-4 md:px-10">

        {{-- NAVBAR COMPLETA --}}
        <nav class="relative items-center py-3 border-b border-white/25">
            <div class="relative w-full flex items-center h-16">

                {{-- LOGO DO SITE --}}
                <div>
                    <a href="/">
                        <img class="w-20"
                            src="{{ asset('logo.png') }}"
                            alt="logo">
                    </a>
                </div>

                {{-- MENU DEFAULT --}}
                <div class="hidden md:block absolute left-1/2 -translate-x-1/2">
                    <div class="space-x-6 font-bold text-xl font-mont">
                        <a href="/pools" id="pools" class="text-white target:text-grape hover:text-grape transition-colors duration-300">Listar
                            Enquetes</a>
                        <a href="/pools/create" class="text-white hover:text-grape transition-colors duration-300">Criar
                            Enquete</a>
                    </div>
                </div>

                <!-- BOTÃO MENU MOBILE -->
                <div class="md:hidden ml-auto flex">
                    <button type="button" id="mobile-menu-button"
                        class="relative inline-flex items-center justify-center rounded-md p-2"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Abrir menu principal</span>
                        {{-- ÍCONE 'HAMBURGUER' --}}
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            data-slot="icon" aria-hidden="true" class="size-6 block icon-hamburger">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        {{-- ÍCONE 'X' --}}
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            data-slot="icon" aria-hidden="true" class="size-6 hidden icon-close">
                            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

            </div>

            {{-- MENU MOBILE --}}
            <div id="mobile-menu"
                class="absolute md:hidden top-full left-0 w-full bg-surface-2 border border-white/25 rounded-md opacity-0 -translate-y-4 pointer-events-none transition-all duration-300 ease-out">
                <div class="space-y-1 px-3 pb-3 pt-2 font-semibold font-mont">
                    <a href="/pools" class="flex items-center px-3 py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                        <span> Listar Enquetes</span>
                    </a>
                    <a href="/pools/create" class="flex items-center px-3 py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        <span> Criar Enquete</span>
                    </a>
                    </a>
                </div>
            </div>

        </nav>

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>

    </div>

</body>

</html>
