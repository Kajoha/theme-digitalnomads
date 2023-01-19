/* jQuery(document).ready($ => {
    $('.menu').slicknav({
        appendTo: '.site-header'
    });


    // mapa de leaftlet

    var map = L.map('map').setView([51.505, -0.09], 13);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([51.5, -0.09]).addTo(map)
        .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
        .openPopup();
}); */

function digitalnomadsMenu() {
    const hamburguer = document.querySelector('.hambur-menu svg');
    hamburguer.addEventListener('click', function () {
        const menuPrimary = document.querySelector('.content-menu-mobile');
        menuPrimary.classList.toggle('see');
    })
}

document.addEventListener('DOMContentLoaded', digitalnomadsMenu);


window.onscroll = function () {
    const scroll = window.scrollY;
    const navSection = document.querySelector('.content-nav');
    if (scroll > 300) {
        navSection.classList.add('fixed-top');
    } else {
        navSection.classList.remove('fixed-top');
        console.log(scroll)
    }
}

