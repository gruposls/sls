
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

$mail->addAttachment('docs/movillibertad.pdf', 'movillibertad.pdf');
$correo = "<div style='width:90%; border:4px ridge blue; padding:6px;'>";
	$correo .= "<h1>Mensaje para ti</h1>";
	$correo .= "</div>";
	$correo .= "<img src='cid:logo_php' align='left' border='0' hspace='10' />"; // OJO con la imagen. Hablaremos de esto en el próximo apartado.
	$correo .= "Este es un mensje para ti.<br />";
	$correo .= "En él puedes ver:";
	$correo .= "<ul>";
	$correo .= "<li>Ver un correo en HTML</li>";
	$correo .= "<li>Comprobar las funcionalidades de PHPMailer</li>";
	$correo .= "<li>Contactar con nosotros <a href='http://eldesvandejose.com/contacta-con-nosotros/' target='_blank'>aquí</a></li>";
	$correo .= "<li>Registrarte en la página <a href='http://eldesvandejose.com/register/' target='_blank'>aquí</a></li>";
	$correo .= "</ul>";
	// En nuestro correo incluimos hasta un formulario.
	$correo .= "<form action='mailto:mi.cuenta@mi.servidor.com' method='post'>";
	$correo .= "<br /><br /><br /><br />";
	$correo .= "Tu nombre: ";
	$correo .= "<input type='text' name='nombre' size='20' style='border: 1px solid blue; font-size:12px; font-familiy:Arial;' /><br /><br />";
	$correo .= "Tu opinión:<br />";
	$correo .= "<textarea name='opinion' cols='60' rows='10' style='border: 1px solid blue; font-size:12px; font-familiy:Arial; resize:none;'></textarea>";
	$correo .= "<br /><br />";
	$correo .= "<input type='submit' value='Enviar' style='border: 1px solid blue; font-size:12px; font-familiy:Arial;' />";
	$correo .= "</form>";

$mail->Body = $correo;
$mail->AltBody = 'This is a plain-text message body';

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}