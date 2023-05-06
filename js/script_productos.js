const buttons = document.querySelectorAll('.button-value');
const cards = document.querySelectorAll('.card');

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
