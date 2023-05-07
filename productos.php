<?php
    require 'config/config.php';
    require 'config/database.php';
    $db = new Database();
    $con = $db->conectar();

    $sql = $con->prepare("SELECT id, nombre, descripcion, precio, porciones, id_categoria FROM productos WHERE activo=1");
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
    <link rel="icon" href="img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/style_sucursales.css">
    <link rel="stylesheet" href="css/style_products.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Productos</title>
</head>
<body>
    <section>
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
    </section>
    
    <section class="portada">
        <img src="img/store/portada-productos.png" alt="Sucursales" class="img-sucursales">
        <div class="title-section">
            <h3>Menú</h3>
        </div>
    </section>

    <section>
        <div class="wrapper">
            <div id="search-container">
                <input typer="search" id="search-input" placeholder="Busca un producto por nombre..."/>
                <button id="search">Buscar</button>
            </div>
            <div id="buttons">
                <button class="button-value active" data-category="all">Todos</button>
                <button class="button-value" data-category=1>Bebidas</button>
                <button class="button-value" data-category=2>Pasteles</button>
                <button class="button-value" data-category=3>Postres</button>
            </div>
        </div>
        <div class="products-section" id="products-section">
            <?php foreach ($resultado as $row) { ?>
                <div class="card <?php echo $row['id_categoria']; ?>">
                    <div class="card-img">
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
                    <div class="card-title">
                        <h4><?php echo $row['nombre']; ?></h4>
                        <p><?php echo $row['descripcion']; ?></p>
                    </div>
                    <div class="card-details">
                        <div class="price">
                            <span>Precio</span>
                            <p><?php echo number_format($row['precio'], 2,'.', ','); ?></p>
                        </div>
                        <div class="portions">
                            <span>Porciones</span>
                            <p><?php echo $row['porciones']; ?></p>
                        </div>
                    </div>
                    <button onclick="addProducto(<?php echo $row['id']; ?>, '<?php echo hash_hmac('sha1', $row['id'], KEY_TOKEN); ?>')">+</button>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/script_index.js"></script>
    <script type="text/javascript" src="js/script_productos.js"></script>

</body>
</html>