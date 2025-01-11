document.addEventListener('DOMContentLoaded', function () {
  // Selectors for elements
  const mobileMenuButton = document.querySelector('button[type="button"]');
  const mobileMenu = document.querySelector('.lg\\:hidden[role="dialog"]');
  const closeMenuButton = mobileMenu.querySelector('button[type="button"]');

  // Function to open the mobile menu
  function openMenu() {
    mobileMenu.classList.remove('hidden');
  }

  // Function to close the mobile menu
  function closeMenu() {
    mobileMenu.classList.add('hidden');
  }

  // Event listener to open menu on button click
  mobileMenuButton.addEventListener('click', openMenu);

  // Event listener to close menu on button click
  closeMenuButton.addEventListener('click', closeMenu);

  // Close the menu when clicking outside of it
  document.addEventListener('click', function (event) {
    if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
      closeMenu();
    }
  });
});
