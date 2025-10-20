document.addEventListener('DOMContentLoaded', () => {
    
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const hamburgerIcon = menuButton.querySelector('.icon-hamburger');
    const closeIcon = menuButton.querySelector('.icon-close');

    menuButton.addEventListener('click', () => {
      
      mobileMenu.classList.toggle('opacity-0');   
      mobileMenu.classList.toggle('opacity-100');     
      mobileMenu.classList.toggle('-translate-y-4'); 
      mobileMenu.classList.toggle('translate-y-0');
      mobileMenu.classList.toggle('pointer-events-none');
      mobileMenu.classList.toggle('pointer-events-auto'); 

      hamburgerIcon.classList.toggle('block');
      hamburgerIcon.classList.toggle('hidden');
      closeIcon.classList.toggle('block');
      closeIcon.classList.toggle('hidden');

      const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
      menuButton.setAttribute('aria-expanded', !isExpanded);
    });
  });