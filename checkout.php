<?php
    require 'config/config.php';
    require 'config/database.php';
    $db = new Database();
    $con = $db->conectar();

    $productos = isset($_SESSION['carrito']['productos']) ? $_SESSION['carrito']['productos'] : null;

    print_r($_SESSION);

    $lista_carrito = array();

    if($productos != null)
    {
        foreach($productos as $clave => $cantidad)
        {
            $sql = $con->prepare("SELECT id, nombre, precio, $cantidad AS cantidad FROM productos WHERE id=? AND activo=1");
            $sql->execute([$clave]);
            $lista_carrito[] = $sql->fetch(PDO::FETCH_ASSOC);
        }
    }

    //session_destroy();

    //
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/style_sucursales.css">
    <link rel="stylesheet" href="css/style_checkout.css">
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

    <section>
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th></th>
                        </tr>
                        <tbody>
                            <?php if($lista_carrito == null){
                                echo '<tr><td colspan="5" class="text-center"><b>Lista vacía</b></td></tr>';
                            }else{
                                $total = 0;
                                foreach($lista_carrito as $producto){
                                    $_id = $producto['id'];
                                    $nombre = $producto['nombre'];
                                    $precio = $producto['precio'];
                                    $cantidad = $producto['cantidad'];
                                    $subtotal = $cantidad * $precio;
                                    $total += $subtotal;
                                    ?>
                            <tr>
                                <td><?php echo $nombre; ?></td>
                                <td><?php echo MONEDA .  number_format($precio,2, '.', ','); ?></td>
                                <td>
                                    <input type="number" min="1" max="10" step="1" value="<?php echo $cantidad ?>" size="5"; id="cantidad_<?php echo $_id; ?>" onchange="actualizaCantidad(this.value, <?php echo $_id; ?>)">
                                </td>
                                <td>
                                    <div id="subtotal_<?php echo $_id; ?>" name="subtotal[]"><?php echo MONEDA . number_format($subtotal,2, '.', ','); ?></div>
                                </td>
                                <td>
                                    <a href="#" id="eliminar" class="btn btn-warning btn-sm" data-bs-id="<?php echo $_id; ?>" data-bs-toggle="modal" data-bs-target="#eliminaModal">Eliminar</a>
                                </td>
                            </tr>
                            <?php } ?>
                            <tr>
                                <td colspan="3"></td>
                                <td colspan="2">
                                    <p class="h3" id="total"><?php echo MONEDA . number_format($total, 2, '.', ','); ?></p>
                                </td>
                            </tr>
                        </tbody>
                        <?php } ?>
                    </thead>
                </table>
                <div class="row">
                    <div class="col-md-5 offset-md-7 d-grid gap-2">
                        <button class="btn btn-primary btn-lg">Realizar pago</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="eliminaModal" tabindex="-1" aria-labelledby="eliminaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Alerta</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Desea eliminar el producto del carrito?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button id="btn-elimina" type="button" class="btn btn-danger" onclick="eliminar()">Eliminar</button>
            </div>
            </div>
        </div>
    </div>


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
    <script type="text/javascript" src="js/script_carrito.js"></script>
</body>
</html>