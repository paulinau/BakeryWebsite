<?php
    require 'config/config.php';
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
            <div class="textBox">
                <h2>Repostería Fina y de alta calidad para esos momentos tan dulces y especiales.<br><br><span id="title">Selva Negra</span></h2>
                <p>Lorem ipsum lor sit amet, consectetur adipiscing elit. Donec ornare eget velit vel finibus. Etiam sed dui non erat vestibulum iaculis quis non est. <br><span>$230</span></p>
                <button>
                    <div class="svg-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16"> 
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/> 
                        </svg> 
                    </div>
                    <span>Agregar al carrito</span>
                </button>
            </div>

            <div class="imgBox">
                <img src="img/products/pastel.png" alt="pastel" class="nuevos">
            </div>
        </div>

        <ul class="thumb">
            <li><img src="img/products/pastel.png" onclick="imgSlider('img/products/pastel.png');changeTitle(0)"></li>
            <li><img src="img/products/pay-fresa.png" onclick="imgSlider('img/products/pay-fresa.png');changeTitle(1)"></li>
            <li><img src="img/products/waffle.png" onclick="imgSlider('img/products/waffle.png');changeTitle(2)"></li>
            <li><img src="img/products/bebida-fresa.png" onclick="imgSlider('img/products/bebida-fresa.png');changeTitle(3)"></li>
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
            <div class="box">
                <div class="box-img">
                    <img src="img/products/rebanada-fresa.png">
                </div>
            
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <h4>Alemán</h4>
                <span class="price">$ 180</span>
                <button>
                    <div class="svg-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16"> 
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/> 
                        </svg> 
                    </div>
                    <span>Agregar al carrito</span>
                </button>
            </div>
        </div>

        <div class="shop-container">
            <div class="box">
                <div class="box-img">
                    <img src="img/products/rebanada-zanahoria.png">
                </div>
            
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <h4>Zanahoria</h4>
                <span class="price">$ 200</span>
                <button>
                    <div class="svg-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16"> 
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/> 
                        </svg> 
                    </div>
                    <span>Agregar al carrito</span>
                </button>
            </div>
        </div>

        <div class="shop-container">
            <div class="box">
                <div class="box-img">
                    <img src="img/products/rebanada-fresa.png">
                </div>
            
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <h4>Alemán</h4>
                <span class="price">$ 180</span>
                <button>
                    <div class="svg-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16"> 
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/> 
                        </svg> 
                    </div>
                    <span>Agregar al carrito</span>
                </button>
            </div>
        </div>

        <div class="shop-container">
            <div class="box">
                <div class="box-img">
                    <img src="img/products/rebanada-zanahoria.png">
                </div>
            
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <h4>Zanahoria</h4>
                <span class="price">$ 200</span>
                <button>
                    <div class="svg-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16"> 
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/> 
                        </svg> 
                    </div>
                    <span>Agregar al carrito</span>
                </button>
            </div>
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
</body>
</html>