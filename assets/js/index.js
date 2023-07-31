//Hamburger pour le responsive
let hamburger = document.querySelector('#hamburger');

hamburger.style.cursor = 'pointer';
hamburger.addEventListener('click', () => {
  let topnav = document.querySelector('#topnav');
  let navList = document.querySelector('#nav');
  topnav.classList.toggle('fixed');
  hamburger.classList.toggle('croix');
  navList.classList.toggle('responsive');
});
//fleche pour remonter en haut de la page

let scrolltop = document.querySelector('#scrolltop');
scrolltop.style.cursor = 'pointer';
scrolltop.addEventListener('click', () => {
  window.scrollTo(0, 0);
});

//slider pour les projets
const slide = [
  '../images/carapuce.png',
  '../images/salameche.png',
  '../images/bulbizarre.png',
];
let numero = 0;
function ChangeSlide(sens) {
  numero = numero + sens;
  if (numero < 0) {
    numero = slide.length - 1;
  }
  if (numero > slide.length - 1) {
    numero = 0;
  }
  document.getElementById('slide').src = slide[numero];
}
