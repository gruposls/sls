
<?php
$email= $_POST["email"];

date_default_timezone_set('Etc/UTC');
	
require (dirname(__FILE__) . '/PHPMailer-master/PHPMailerAutoload.php');

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Debugoutput = 'html';
$mail->Host = 'gator2019.hostgator.com';

$mail->Port = 465;

$mail->SMTPSecure = 'ssl';

$mail->SMTPAuth = true;

$mail->Username = "adminsls@gruposls.com";

$mail->Password = "Deuscumnobis123";

$mail->setFrom('adminsls@gruposls.com', 'GRUPOSLS');

$mail->addReplyTo('adminsls@gruposls.com', 'First Last');

$mail->addAddress($email);

$mail->AddEmbeddedImage('docs/1.png', 'logo_php', 'logo', 'base64', 'image/png'); 

$mail->isHTML(true);

$mail->CharSet = 'UTF-8';

$mail->Subject = 'PHPMailer GMail SMTP test'; 

$mail->addAttachment('docs/movilli20bertad.pdf', 'movillibertad.pdf');
$correo = "<div style='width:90%; border:4px ridge blue; padding:6px;'>";
	$correo .= "<h1>Mensaje para ti</h1>";
	$correo .= "</div>";
	$correo .= "<img src='cid:logo_php' align='left' border='0' hspace='10' />"; // OJO con la imagen. Hablaremos de esto en el próximo apartado.
	$correo .= "Este es un mensje para ti.<br />";
	$correo .= "En él puedes ver:";
	$correo .= "<ul>";
	$correo .= "<li>Ver un correo en HTML</li>";
	$correo .= "<li>Comprobar las funcionalidades de PHPMailer 25/01/2017</li>";
	$correo .= "<li>Contactar con nosotros <a href='http://eldesvandejose.com/contacta-con-nosotros/' target='_blank'>aquí</a></li>";
	$correo .= "<li>Registrarte en la página <a href='http://eldesvandejose.com/register/' target='_blank'>aquí</a></li>";
	$correo .= "</ul>";
	// En nuestro correo incluimos hasta un formulario.
	

$mail->Body = $correo;
$mail->AltBody = 'This is a plain-text message body';

$mail->send();

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Se ha enviado informacion a su correo.";
}