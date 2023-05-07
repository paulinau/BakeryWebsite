// La nav bar siempre estara arriba
window.addEventListener('scroll', function(){
    var header = document.querySelector('header');
    header.classList.toggle('sticky', window.scrollY > 0);
});

// Funcion para cambiar la imagen de cada producto
function imgSlider(anything){
    document.querySelector('.nuevos').src = anything;
}

/*
// Funcion para cambiar los datos de cada producto
function changeProduct(id, name, description, price, portions) {
    let id_producto = document.getElementById('idProducto');
    let nombre = document.getElementById('title');
    let descripcion = document.getElementById('description');
    let details = document.getElementById('detalles');

    nombre.innerHTML = name;
    descripcion.innerHTML = description;
    details.innerHTML = "$" + price + " - " + portions + " porciones";

    //id_producto.setAttribute('onclick', "addProducto(" + id + ", '" + hash_hmac('sha1', id, KEY_TOKEN) + "')");
    id_producto.setAttribute('onclick', "addProducto(" + id + ", '" + <?php echo hash_hmac('sha1', id, KEY_TOKEN); ?> + "')");
}*/

// Funcion para desplegar un menu
function toggleMenu(){
    var menuToggle = document.querySelector('.toggle');
    var navigation = document.querySelector('.navigation');
    menuToggle.classList.toggle('active');
    navigation.classList.toggle('active');
}

// Funcion para abrir una ventana
/*
function openPage(pageUrl){
    window.location.href=pageUrl;
}*/