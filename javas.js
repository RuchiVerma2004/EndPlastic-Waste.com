function toggleSearch() {
    var searchContainer = document.getElementById('searchContainer');
    searchContainer.classList.toggle('open');
  }
  
  function closeSearch() {
    var searchContainer = document.getElementById('searchContainer');
    searchContainer.classList.remove('open');
  }

  const menuIcon = document.getElementById('menu-icon');
  const menu = document.getElementById('navbar');

  menuIcon.addEventListener('click', () => {
    menu.classList.toggle('active');
  });

