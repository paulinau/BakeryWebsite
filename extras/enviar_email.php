<?php 
    use PHPMailer\PHPMailer\{PHPMailer, SMTP, Exception};
    
    require '../phpmailer/src/PHPMailer.php';
    require '../phpmailer/src/SMTP.php';
    require '../phpmailer/src/Exception.php';

    $mail = new PHPMailer(true);

    
?>