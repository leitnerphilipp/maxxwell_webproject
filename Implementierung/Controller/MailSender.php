<?php
require_once 'PHPMailer/class.phpmailer.php';
require_once 'PHPMailer/class.smtp.php';
require_once 'smtpconfig.php';

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host       = $mailhost;
$mail->SMTPDebug  = 1; // Kann man zu debug Zwecken aktivieren
$mail->SMTPAuth   = true;
$mail->Username   = $mailusername;
$mail->Password   = $mailpassword;
$mail->Port       = 587;

$frommail = "Webmaster1@nerdmania.at";
$fromname = "Maxxwell Computers";
$mail->SetFrom($frommail, $fromname);

$address = $_POST['email'];
$adrname = $_POST['username'];
$mail->AddAddress($address, $adrname);
$mail->CharSet ="UTF-8";

$mail->Subject = "Maxxwell Computers Account-Bestätigung";
$mail->Body = "Ihre Registrierung bei Maxxwell Computers war erfolgreich. Sie können sich nun mit Ihrer Kennung anmelden!";

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}


 ?>
