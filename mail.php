<?php
require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';
require 'OAuth.php';

if(isset($_POST['enviar'])){
$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->isSMTP();
/*
Enable SMTP debugging
0 = off (for production use)
1 = client messages
2 = client and server messages
*/
$mail->SMTPDebug = 0;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "sotiosocm@gmail.com";
$mail->Password = "Correo12345";
$mail->setFrom('sotiosocm@gmail.com', 'Rica Y David');
$mail->addAddress('d.josue@hotmail.es', 'Prueba');
$mail->Subject = 'Rica la carne';
$mail->Body = "Sirvio la picha";
$mail->CharSet = 'UTF-8'; // Con esto ya funcionan los acentos
$mail->IsHTML(true);

if (!$mail->send())
{
	echo "Error al enviar el E-Mail: ".$mail->ErrorInfo;
}
else
{
	echo "E-Mail enviado";
}
}
?>
