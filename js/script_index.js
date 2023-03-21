// La nav bar siempre estara arriba
window.addEventListener('scroll', function(){
    var header = document.querySelector('header');
    header.classList.toggle('sticky', window.scrollY > 0);
});

// Funcion para cambiar la imagen de cada pastel
function imgSlider(anything){
    document.querySelector('.nuevos').src = anything;
}

// Funcion para cambiar el titulo de cada pastel
function changeTitle(position){
    const titles = ["Selva Negra", "Pay frutal", "Waffle de Vainilla", "Malteada Rosa"];
    const title = document.getElementById('title');

    title.innerHTML = titles[position];
}

// Funcion para desplegar un menu
function toggleMenu(){
    var menuToggle = document.querySelector('.toggle');
    var navigation = document.querySelector('.navigation');
    menuToggle.classList.toggle('active');
    navigation.classList.toggle('active');
}

// Funcion para abrir una ventana
function openPage(pageUrl){
    window.location.href=pageUrl;
}