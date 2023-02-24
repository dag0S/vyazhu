window.addEventListener('DOMContentLoaded', () => {
    const menu = document.querySelector('.nav__menu'),
    menuItem = document.querySelectorAll('.nav__menu-item'),
    hamburger = document.querySelector('.hamburger');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('hamburger_active');
        menu.classList.toggle('nav__menu_active');
    });

    menuItem.forEach(item => {
        item.addEventListener('click', () => {
            hamburger.classList.toggle('hamburger_active');
            menu.classList.toggle('nav__menu_active');
        })
    })
})