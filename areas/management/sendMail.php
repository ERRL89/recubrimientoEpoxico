<?php
    //CREA ARRAY PARA RECIPIENTS
    $recipients = array();   
    //Correos en produccion
    /*$nombreUsuario1 = "Francisco Javier Manjarrez González";
    $emailUsuario1 =  "manjarrezgonzalez42@gmail.com";
    $nombreUsuario2 = "Sonia Sanchez";
    $emailUsuario2 =  "soniasanchez3105@gmail.com";*/

    //Correos de pruebas
    $nombreUsuario1 = "Jorge A. Barrientos Barrios";
    $emailUsuario1 =  "jabarrientos94@gmail.com";

    //Usuario a quien se envia la cotización
    $nombre_cliente = $nombre;
    $email_cliente =  $email;
   
    $dataUserMail1 = array("email" => "{$emailUsuario1}", "name" => "{$nombreUsuario1}");
    array_push($recipients, $dataUserMail1);

    $dataUserMail_cliente = array("email" => "{$email_cliente}", "name" => "{$nombre_cliente}");
    array_push($recipients, $dataUserMail_cliente);


    #ENVIO DE CORREO
    //$recipients = array(array("email" => "{$emailDestino}", "name" => "{$nombreDestino}"));
    $mailSubject = "Cotización - ".$nombre;
    $mailPath = $root.'templates/acil/email/mail.php';
    $mailData = array(
        array("var_name" => "nombre", "var_val" => "{$nombre}")
    );
   
    $routeCot=$root."docs/cotizaciones/".$fecha."-".$nombre.".pdf";
    
    $attachments=array($routeCot);

    ##SE EJECUTA FUNCIÓN
    sendEmail($recipients, $mailSender, $mailSubject, $mailPath, $mailData, $mailHost, $mailUser, $mailPass, $attachments); 
?>