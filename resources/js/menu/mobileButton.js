document.addEventListener('DOMContentLoaded', () => {
    
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const hamburgerIcon = menuButton.querySelector('.icon-hamburger');
    const closeIcon = menuButton.querySelector('.icon-close');

    menuButton.addEventListener('click', () => {
      
      // Alterna as classes de estado para a transição
      mobileMenu.classList.toggle('opacity-0');       // De 0% para 100%
      mobileMenu.classList.toggle('opacity-100');     // De 100% para 0%
      mobileMenu.classList.toggle('-translate-y-4');  // De "para cima"
      mobileMenu.classList.toggle('translate-y-0');   // Para "posição 0"
      mobileMenu.classList.toggle('pointer-events-none'); // De "não clicável"
      mobileMenu.classList.toggle('pointer-events-auto'); // Para "clicável"

      // Alterna os ícones (hambúrguer e 'X')
      hamburgerIcon.classList.toggle('block');
      hamburgerIcon.classList.toggle('hidden');
      closeIcon.classList.toggle('block');
      closeIcon.classList.toggle('hidden');

      // Atualiza o atributo ARIA para acessibilidade
      const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
      menuButton.setAttribute('aria-expanded', !isExpanded);
    });
  });