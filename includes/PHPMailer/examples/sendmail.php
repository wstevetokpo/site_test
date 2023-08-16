<?php

/**
 * This example shows sending a message using a local sendmail binary.
 */

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;

require __DIR__ . DIRECTORY_SEPARATOR . '../vendor/autoload.php';

if ( !function_exists('sendMailPro') ) {
	function sendMailPro($objet, $message, $destination, $expedition) {

		$mail = new PHPMailer();
		
		$mail->isSendmail();
		
		$mail->setFrom($expedition['email'], $expedition['name']);

		// $mail->addReplyTo($the_email, $expedition['name']);
		
		$mail->addReplyTo($expedition['email'], $expedition['name']);

		$mail->addAddress($destination['email'], $destination['name']);

		$mail->Subject = $objet;

		$mail->msgHTML($message);

		if (!$mail->send()) {
		    return FALSE;
		} else {
			return TRUE;
		}
	}
}