<?php 
    $destinatario = 'rabbitweb84@gmail.com';
    $paquete = $_POST['paquete'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $msj = $_POST['msj'];

    $hrader = "Enviado desde el sitio web";
    $msjcompleto = $msj . "\nAtentamente: " + $nombre;

    mail($destinatario, $email, $paquete, $nombre, $msjcompleto, $header);
    echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\", 1000)</script>";
?>