$(document).ready(function () {
    $(".menu-icon").on("click", function () {
        $("nav ul").toggleClass("showing");
    })
})

$(window).on("scroll", function () {
    if ($(window).scrollTop()) {
        $('nav').addClass('black');
    } else {
        $('nav').removeClass('black');
    }
})
const btnMenu = document.querySelector('.btn-menu');
const menu = document.querySelector('.nav');

btnMenu.addEventListener('click', event => {
    event.preventDefault();
    menu.classList.toggle('open')
})