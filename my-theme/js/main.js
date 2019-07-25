const hamburgerIcon = document.getElementById("hamburger-icon");
const mobileNav = document.getElementById("mobile-nav");
const searchIcon = document.getElementById("search-icon");
const searchDropdown = document.getElementById("search-dropdown");

searchIcon.addEventListener('click', function () {
  if (searchDropdown.style.top == '81px') {
    searchDropdown.style.top = '24px';
    searchDropdown.style.pointerEvents = 'none';
  } else {
    searchDropdown.style.top = '81px';
    searchDropdown.style.pointerEvents = 'auto';
  }
});

hamburgerIcon.addEventListener('click', function () {
  if (mobileNav.style.opacity == "1") {
    mobileNav.style.opacity = '0';
    mobileNav.style.pointerEvents = 'none';
  } else {
    mobileNav.style.opacity = '1';
    mobileNav.style.pointerEvents = 'auto';
  }
});