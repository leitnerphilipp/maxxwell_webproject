<?php

require_once '../Model/Database_Operations.php';
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

function strpos_recursive($haystack, $needle, $offset = 0, &$results = array()) {
    $offset = strpos($haystack, $needle, $offset);
    if($offset === false) {
        return $results;
    } else {
        $results[] = $offset;
        return strpos_recursive($haystack, $needle, ($offset + 1), $results);
    }
}

function randomString($length = 10) {
	$str = "";
	$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
	$max = count($characters) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}

$string = $_POST['input'];
$search = '@';
$found = strpos_recursive($string, $search);

if($found) {
  $result = $pdo->query(getUserByEMail($_POST['input']));
} else {
  $result = $pdo->query(getUserByUsername($_POST['input']));
}

foreach ($result as $row) {
  $email = $row['EMailAdresse'];
  $username = $row['Benutzername'];
}

$new_password = randomString();
$crypted = password_hash($new_password, PASSWORD_DEFAULT);

update_user_password_by_email($crypted, $email);

$address = $email;
$adrname = $username;
$mail->AddAddress($address, $adrname);
$mail->CharSet ="UTF-8";

$mail->Subject = "Maxxwell Computers Kennung angefordert";
$mail->Body = "Ihr Benutzername lautet ".$username.". Sie können sich vorübergehend mit folgenden Passwort anmelden: ".$new_password.". Jedoch empfehlen wir Ihnen dieses zu ändern!";

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}

 ?>
