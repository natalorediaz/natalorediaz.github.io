
const burgerMenuBtn = document.querySelector ("#burger-menu-toggler");
const menuItem = document.querySelectorAll (".menuitem");


burgerMenuBtn.addEventListener ("click" , function () {
    document.body.classList.toggle ('mobile-menu-active');
})
menuItem.forEach (function (item) {
    item.addEventListener ('click', function() {
        document.body.classList.remove ('mobile-menu-active');
    })
})
