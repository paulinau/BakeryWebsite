const buttons = document.querySelectorAll('.button-value');
const cards = document.querySelectorAll('.card');

// Filtrar productos según su categoría
buttons.forEach(button => {
    button.addEventListener('click', () => {
        const category = button.dataset.category;

        // Desactivar todos los botones
        buttons.forEach(button => button.classList.remove('active'));

        // Activar el botón actual
        button.classList.add('active');

        // Mostrar u ocultar los productos según la categoría seleccionada
        cards.forEach(card => {
            if (category === 'all') {
                card.style.display = 'block';
            } else if (card.classList.contains(category)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
});

// Filtrar productos según su nombre
document.getElementById("search").addEventListener("click", function() {
    filterProducts();
});


function filterProducts() {
    var input = document.getElementById("search-input");
    var filter = input.value.toUpperCase();
    var products = document.getElementById("products-section").getElementsByClassName("card");

    for (var i = 0; i < products.length; i++) {
        var title = products[i].getElementsByClassName("card-title")[0].getElementsByTagName("h4")[0];
        if (title.innerHTML.toUpperCase().indexOf(filter) > -1) {
            products[i].style.display = "";
        } else {
            products[i].style.display = "none";
        }
    }
}

function addProducto(id, token)
{
    let url = 'extras/carrito.php';
    let formData = new FormData();
    formData.append('id', id);
    formData.append('token', token);

    fetch(url, {
        method: 'POST',
        body: formData,
        mode: 'cors'
    }).then(response => response.json())
    .then(data => {
        if (data.ok) {
            let elemento = document.getElementById("num_cart")
            elemento.innerHTML = data.numero
        }
    })
}