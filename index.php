<?php
require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';
require 'OAuth.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->isSMTP();
/*
Enable SMTP debugging
0 = off (for production use)
1 = client messages
2 = client and server messages
*/
$mail->Host       = "mail.console.clever-cloud.com"; 
$mail->SMTPDebug = 0;
$mail->Host = 'smtp.live.com';
$mail->Port = 465;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "rwyseguridad@hotmail.com";
$mail->Password = "Correo12345";
$mail->setFrom('rwyseguridad@hotmail.com', 'Picha Mama');
$mail->addAddress('d.josue@hotmail.es', 'Panocha');
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
?>
