const menu = document.querySelector('nav .container .sub-menu');
const burgerMenu  = document.querySelector('.burger-menu ');

burgerMenu.addEventListener('click', () => {
    menu.classList.toggle("active");
})