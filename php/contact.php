<?php

$email = $_POST['email'];
$name = $_POST['name'];
$msg = $_POST['comment'];

if($email == '' | $name == '' | $msg ==''){

    echo json_encode('error');

}   else {

// $to = $_POST['email'];
// $subject = "Correo desde pagina web";
// $message = "Nombre: $name"."\nEmail: $email"."\nMensaje: $msg";

// $headers = "From: nicolaschamorro@cisde.co";

// mail($to, $subject, $message, $headers);

echo json_encode ('ok');

}




?>