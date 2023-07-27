let hamburger = document.querySelector('#hamburger');

hamburger.style.cursor = 'pointer';
hamburger.addEventListener('click', () => {
  let topnav = document.querySelector('#topnav');
  let navList = document.querySelector('#nav');
  topnav.classList.toggle('fixed');
  hamburger.classList.toggle('croix');
  navList.classList.toggle('responsive');
});
let scrolltop = document.querySelector('#scrolltop');
scrolltop.style.cursor = 'pointer';
scrolltop.addEventListener('click', () => {
  window.scrollTo(0, 0);
});
