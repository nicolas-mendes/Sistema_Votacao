<!DOCTYPE html>
<html lang="en" class="h-full bg-base">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Votação</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="h-full text-primary">

<div class="px-4 md:px-10">
  
  {{-- NAVBAR COMPLETA --}}
  <nav class="relative items-center py-3 border-b border-white/25">
    <div class="relative w-full flex items-center h-16">

      {{-- LOGO DO SITE --}}
      <div>
        <a href="/">
            <img class="w-24" src="https://upload.wikimedia.org/wikipedia/pt/3/3f/Neon-Genesis-Evangelion-Logo.jpg" alt="logo">
        </a>
      </div>

      {{-- MENU DEFAULT --}}
      <div class="hidden md:block absolute left-1/2 -translate-x-1/2">
        <div class="space-x-6 font-semibold text-lg font-mont">
            <a href="/pools" class="text-white hover:text-grape transition-colors duration-300">Listar Enquetes</a>
            <a href="/vote" class="text-white hover:text-grape transition-colors duration-300">Votar</a>
            <a href="/create" class="text-white hover:text-grape transition-colors duration-300">Criar Enquete</a>            
        </div>
      </div>

      <!-- BOTÃO MENU MOBILE -->
      <div class="md:hidden ml-auto flex">
        <button type="button" id="mobile-menu-button" class="relative inline-flex items-center justify-center rounded-md p-2" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Abrir menu principal</span>
          {{-- ÍCONE 'HAMBURGUER' --}}
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 block icon-hamburger">
            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          {{-- ÍCONE 'X' --}}
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 hidden icon-close">
            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>

    </div>

    {{-- MENU MOBILE --}}
    <div id="mobile-menu" class="absolute md:hidden top-full left-0 w-full bg-surface-2 border border-white/25 rounded-md opacity-0 -translate-y-4 pointer-events-none transition-all duration-300 ease-out">
      <div class="space-y-1 px-3 pb-3 pt-2 font-semibold font-mont">
        <a href="/pools" class="flex items-center px-3 py-3">
         {{-- SVG ÍCONE --}}
          <span>Listar Enquetes</span>
        </a>

        <a href="/vote" class="flex items-center px-3 py-3">
          {{-- SVG ÍCONE --}}
          <span>Votar</span>
          
        <a href="/create" class="flex items-center px-3 py-3">
          {{-- SVG ÍCONE --}}
          <span>Criar Enquete</span>
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
