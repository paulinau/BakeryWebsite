<?php
    require 'config/config.php';
    require 'config/database.php';
    $db = new Database();
    $con = $db->conectar();

    $sql = $con->prepare("SELECT id, nombre, descripcion, precio, porciones, id_categoria FROM productos WHERE activo=1 AND id<=4");
    $sql->execute();
    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    //session_destroy();

    //print_r($_SESSION);
?>    

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pastelerías Elegance</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/add_cart.css">
    <link rel="stylesheet" href="css/shop_products.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <section class="section">
        <div class="circle"></div>
        <header>
            <a href="index.php"><img src="img/logo.png" alt="logo" class="logo"></a>
            <div class="toggle" onclick="toggleMenu();"></div>
            <ul class="navigation">
                <li><a href="productos.php">Productos</a></li>
                <li><a href="sucursales.php">Sucursales</a></li>
                <li><a href="iniciar-sesion.html">Iniciar sesión</a></li>
                <li><a href="checkout.php"><img src="img/carrito.png"><span id="num_cart" class="badge bg-secondary"><?php echo $num_cart; ?></span></a></li>
            </ul>
        </header>

        <div class="content">
            <?php if (!empty($resultado)) { $row = $resultado[0]; ?>
                <div class="textBox" id="detalles-producto">
                    <h2>Repostería Fina y de alta calidad para esos momentos tan dulces y especiales.<br><br><span id="title"><?php echo $row['nombre']; ?></span></h2>
                    <p id="description"><?php echo $row['descripcion']; ?></p>
                    <p><span id="detalles"><?php echo MONEDA . $row['precio'] . "  -  " . $row['porciones'] . " porciones."; ?></span></p>
                    <button class="agregar-carrito" data-id="<?php echo $row['id']; ?>" data-hash="<?php echo hash_hmac('sha1', $row['id'], KEY_TOKEN); ?>">
                        <div class="svg-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16"> 
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/> 
                            </svg> 
                        </div>
                        <span>Agregar al carrito</span>
                    </button>
                </div>

                <div class="imgBox">
                    <?php 
                        $id = $row['id_categoria'];
                        $imagen = "img/products/" . $id . "/" . strtolower($row['nombre']) . ".png";

                        if(!file_exists($imagen))
                        {
                            $imagen = "img/products/default.png";
                        }    
                    ?>
                    <img src="<?php echo $imagen; ?>" class="nuevos">
                </div>
                <?php } ?>
        </div>

        <ul class="thumb">
            <?php foreach ($resultado as $row) {
                $id = $row['id_categoria'];
                $imagen = "img/products/" . $id . "/" . strtolower($row['nombre']) . ".png";

                if(!file_exists($imagen))
                {
                    $imagen = "img/products/default.png";
                } 
            ?>
            <li><img src="<?php echo $imagen; ?>" onclick="imgSlider('<?php echo $imagen; ?>'); changeProduct('<?php echo $row['nombre']; ?>', '<?php echo $row['descripcion']; ?>', '<?php echo $row['precio']; ?>', '<?php echo $row['porciones']; ?>'); "></li>
            <?php } ?>
        </ul>

        <ul class="sci">
            <li><a href="https://www.facebook.com/pasteleriaselegance/"><img src="img/facebook.png" style="max-width: 50px;"></a></li>
            <li><a href="https://www.instagram.com/pasteleriaselegance/?hl=es"><img src="img/instagram.png" style="max-width: 40px;"></a></li>
        </ul>
        
    </section>

    <section class="productSection">
        <div class="productsTitle">
            <h3>Top Ventas</h3>
        </div>
        
        <div class="shop-container">
            <?php foreach ($resultado as $row) { ?>
                <div class="box">
                    <div class="box-img">
                        <?php 
                            $id = $row['id_categoria'];
                            $imagen = "img/products/" . $id . "/" . strtolower($row['nombre']) . ".png";

                            if(!file_exists($imagen))
                            {
                                $imagen = "img/products/default.png";
                            }
                        ?>
                        <img src="<?php echo $imagen; ?>">
                    </div>

                    <h4><?php echo $row['nombre']; ?></h4>
                    <p><?php echo $row['descripcion']; ?></p>
                    <span class="price"><?php echo MONEDA . number_format($row['precio'], 2,'.', ','); ?></span>
                    <span class="portions"><?php echo $row['porciones'] . " porciones"; ?></span>
                    <button onclick="addProducto(<?php echo $row['id']; ?>, '<?php echo hash_hmac('sha1', $row['id'], KEY_TOKEN); ?>')">
                        <div class="svg-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16"> 
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/> 
                            </svg> 
                        </div>
                        <span>Agregar al carrito</span>
                    </button>
                </div>
                <?php } ?>
        </div>
        
    </section>

    <footer class="foot">
        <div class="foot-container">
            <div class="box">
                <figure>
                    <a href="index.php">
                        <img src="img/logo.png" alt="Pastelerías Elegance">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h3>Pastelerías Elegance</h3>
                <p>Elegance Repostería fina y coffee shop, tiene para ti, todo el dulce sabor de la repostería.</p>
            </div>
            <div class="box">
                <h3>Síguenos en nuestras redes sociales</h3>
                <div class="social-media">
                    <a href="https://www.facebook.com/pasteleriaselegance/" class='bx bxl-facebook-circle'></a>
                    <a href="https://www.instagram.com/pasteleriaselegance/?hl=es" class='bx bxl-instagram'></a>
                </div>
            </div>
        </div>

        <div class="foot-final">
            <small>&copy; 2023 <b>Pastelerías Elegance</b> - Todos los derechos reservados</small>
        </div>
    </footer>

    <script type="text/javascript" src="js/script_index.js"></script>
    <script type="text/javascript" src="js/script_productos.js"></script>
    <script>
        function changeProduct(name, description, price, portions) {
            let nombre = document.getElementById('title');
            let descripcion = document.getElementById('description');
            let details = document.getElementById('detalles');

            nombre.innerHTML = name;
            descripcion.innerHTML = description;
            details.innerHTML = "$" + price + " - " + portions + " porciones";
        }

        let btnAgregar = document.getElementsByClassName('agregar-carrito');

        for (let i = 0; i < btnAgregar.length; i++) {
            // Obtiene el ID del producto y el hash HMAC usando los atributos de datos del botón
            let id = btnAgregar[i].getAttribute('data-id');
            let hash = btnAgregar[i].getAttribute('data-hash');

            // Agrega el evento onclick al botón
            btnAgregar[i].addEventListener('click', function() {
                // Llama a la función addProducto con el ID y el hash HMAC como argumentos
                addProducto(id, hash);
            });
        }
    </script>
</body>
</html>