<?php
    require 'config/config.php';
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
            <a href="index.php"><img src="img/logo.png" alt="logo" class="logo"></a>
            <div class="toggle" onclick="toggleMenu();"></div>
            <ul class="navigation">
                <li><a href="productos.php">Productos</a></li>
                <li><a href="sucursales.php">Sucursales</a></li>
                <li><a href="checkout.php"><img src="img/carrito.png"><span id="num_cart" class="badge bg-secondary"><?php echo $num_cart; ?></span></a></li>
            </ul>
        </header>
    </section>

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/store/img1.jpg" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="img/store/img2.jpg" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="img/store/img3.jpg" class="d-block w-100">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>   

    <section>
        <h3>Sucursales</h3>
        <div class="card-group">
            <div class="card">
                <div class="face front">
                    <img src="img/sucursales/store1.jpg" alt="Sucursal 1">
                </div>
                <div class="face back">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14944.743086847468!2d-100.4608835128418!3d20.53957860000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d34f8025594df7%3A0x3810d793022a3d28!2sElegance%20Pasteler%C3%ADa!5e0!3m2!1ses-419!2smx!4v1682972203456!5m2!1ses-419!2smx" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Pueblito</h5>
                    <p class="card-text">Calle Francisco I Madero #26, El Pueblito, Querétaro.</p>
                    <p class="card-text"><i class='bx bxs-phone'></i><small class="text-muted">442 403 7695</small></p>
                    <p class="card-text"><i class='bx bx-time-five'></i><small class="text-muted">10:00 am - 9:00 pm</small></p>
                </div>
            </div>
            <div class="card">
                <div class="face front">
                    <img src="img/sucursales/store2.jpg" alt="Sucursal 2">
                </div>
                <div class="face back">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14942.810356951848!2d-100.45116311284181!3d20.559346199999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d34566ef75e33d%3A0x18ffadb1233d8010!2sPasteler%C3%ADas%20Elegance!5e0!3m2!1ses-419!2smx!4v1682972280707!5m2!1ses-419!2smx" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="card-body">
                    <h5 class="card-title">El Jacal</h5>
                    <p class="card-text">Av. Prol. El Jacal 961, 76910 El Pueblito, Qro.</p>
                    <p class="card-text"><i class='bx bxs-phone'></i><small class="text-muted">442 609 9302</small></p>
                    <p class="card-text"><i class='bx bx-time-five'></i><small class="text-muted">10:00 am - 9:00 pm</small></p>
                </div>
            </div>
            <div class="card">
                <div class="face front">
                    <img src="img/sucursales/store3.jpg" alt="Sucursal 3">
                </div>
                <div class="face back">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14941.605848010231!2d-100.43431391284177!3d20.571656500000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d34593d28c99cb%3A0xd70618487b7f6c25!2sPasteler%C3%ADa%20elegance!5e0!3m2!1ses-419!2smx!4v1682972140185!5m2!1ses-419!2smx" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Zaragoza</h5>
                    <p class="card-text">Prol. Av. Zaragoza 40, Las Plazas 76180, Querétaro.</p>
                    <p class="card-text"><i class='bx bxs-phone'></i><small class="text-muted">442 901 7126</small></p>
                    <p class="card-text"><i class='bx bx-time-five'></i><small class="text-muted">10:00 am - 9:00 pm</small></p>
                </div>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/script_index.js"></script>
</body>
</html>