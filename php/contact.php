<?php

$email = $_POST['email'];
$name = $_POST['name'];
$msg = $_POST['comment'];

$to = $_POST['email'];
$subject = "Correo desde pagina web";
$message = "Nombre: $name"."\nEmail: $email"."\nMensaje: $msg";

$headers = "From: nicolaschamorro@cisde.co";

mail($to, $subject, $message, $headers);

header('Location:../index.html');


?>