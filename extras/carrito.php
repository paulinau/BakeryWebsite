<?php 
    require "../config/config.php";

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