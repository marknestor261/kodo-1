
  // Get the Scholarships sub-menu list element
  const scholarshipsSubMenu = document.getElementById('scholarships-submenu');

  // Hide the Scholarships sub-menu on mobile devices
  if (window.innerWidth < 768) {
    scholarshipsSubMenu.style.display = 'none';
  }

  // Show the Scholarships sub-menu when the Scholarships item is clicked on mobile devices
  const scholarshipsItem = document.querySelector('.mobile-menu-list > .has-sub > a');
  scholarshipsItem.addEventListener('click', function(event) {
    if (window.innerWidth < 768) {
      event.preventDefault();
      scholarshipsSubMenu.style.display = 'block';
    }
  });