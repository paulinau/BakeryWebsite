<?php
    define("CLIENT_ID", "AbVSG8ZO2wzTRWmxoN77ZjRyOBZqEHh78U5EW35iLeA8vLlND3NFm5m73U_YRpcMzd5YEsGrgz5alqCR");
    define("CURRENCY", "MXN");
    define("KEY_TOKEN", "ABC123*");
    define("MONEDA", "$");

    session_start();

    $num_cart = 0;
    if(isset($_SESSION['carrito']['productos']))
    {
        $num_cart = count($_SESSION['carrito']['productos']);
    }
?>