<?php

$email = $_POST['email'];
$name = $_POST['name'];
$msg = $_POST['comment'];

if($email == '' | $name == '' | $msg ==''){

    echo json_encode('error');

}   else {

$to = 'sado@clubsadolobo.com';
$subject = "Correo desde pagina web";
$message = $msg;

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From:".$name.' <'.$email.'>';

mail($to, $subject, $message, $headers);

echo json_encode ('ok');

}




?>