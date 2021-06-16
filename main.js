

const burgerMenuBtn = document.querySelector ("#burger-menu-toggler");
const menuItem = document.querySelectorAll (".menuitem");

burgerMenuBtn.addEventListener ("click" , function () {
    document.body.classList.toggle ('mobile-menu-active');
})



