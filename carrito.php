<?php 
    require "config/config.php";

    if(isset($_POST['id']))
    {
        $id = $_POST['id'];
        $token = $_POST['token'];

        $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);

        //Validamos que el token del usuario sea el mismo que es generado
        if($token == $token_tmp)
        {
            //Agrega un producto al carrito, si ya estaba el producto entonces le suma 1 a la cantidad actual
            if(isset($_SESSION['carrito']['productos'][$id]))
            {
                $_SESSION['carrito']['productos'][$id] += 1;
            }
            else
            {
                $_SESSION['carrito']['productos'][$id] = 1;
            }

            $datos['numero'] = count($_SESSION['carrito']['productos']);
            $datos['ok']= true;
        }
        else
        {
            $datos['ok']= false;
        }
    }
    else
    {
        $datos['ok']= false;
    }

    echo json_encode($datos);

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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Sucursales</title>
</head>
<body>
    <section>
        <header>
            <a href="index.html"><img src="img/logo.png" alt="logo" class="logo"></a>
            <div class="toggle" onclick="toggleMenu();"></div>
            <ul class="navigation">
                <li><a href="productos.php">Productos</a></li>
                <li><a href="sucursales.html">Sucursales</a></li>
                <li><a href="iniciar-sesion.html">Iniciar sesión</a></li>
                <li><a href="carrito.php"><img src="img/carrito.png"></a></li>
            </ul>
        </header>
    </section>

    <footer class="foot">
        <div class="foot-container">
            <div class="box">
                <figure>
                    <a href="index.html">
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
</body>
</html>