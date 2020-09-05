<?php 
    $destinatario = 'rabbitweb84@gmail.com';

    $nombre = $_POST['nombre'];
    $destinatario = $_POST['destinatario'];
    $email = $_POST['email'];
    $msj = $_POST['msj'];

    $hrader = "Enviado desde el sitio web";
    $mensajecompleto = $msj . "\nAtentamente: " + $nombre;

    
?>