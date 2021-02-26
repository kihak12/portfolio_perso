<?php

if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['object']) && isset($_GET['subject'])) {
  
  $name = $_GET['name'];
  $mail = $_GET['mail'];
  $object = $_GET['object'];
  $message = $_GET['subject'];


	if ($name != "" && $mail != "" && $message != "" && $object != "") {
	////REDACTION PUIS ENVOIE DU MAIL
	  $header="MIME-Version: 1.0\r\n";
	  $header.='From:' . $name . '<' . $mail . '>'."\n";
	  $header.='Content-Type:text/html; charset="utf-8"'."\n";
	  $header.='Content-Transfer-Encoding: 8bit';
	  //////DESTINATAIRE					OBJET        MESSAGE
	  mail("jeremyperret43.pro@gmail.com", $object, $message, $header);

	  header('Location: ../index.php?err=success_message_send');
	  die();
	}
	else {
	  header('Location: ../index.php?err=bad_text');
	}
}
else {
  header('Location: ../index.php?err=bad_text');
}

  
?>