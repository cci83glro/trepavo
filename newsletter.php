<?php 

include_once "config/smtp.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

if (array_key_exists('newsletter-email', $_POST)) {
    date_default_timezone_set('Etc/UTC');
    require './assets/vendor/autoload.php';

	$isAjax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';

    $mail = new PHPMailer();
	$mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->Encoding = "base64";
    
    $mail->Host = $smtp_host;
    $mail->Port = $smtp_port;
    $mail->SMTPAuth = $smtp_auth;
    $mail->Username = $smtp_usr;
    $mail->Password = $smtp_pwd;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->setFrom($smtp_fromEmail, $smtp_fromName);
    $mail->addAddress($smtp_toEmail);
    
    if ($mail->addReplyTo($_POST['newsletter-email'], 'Auto')) {
        $mail->Subject = 'Newsletter';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
            Email: {$_POST['newsletter-email']}
            EOT;

        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but it's unsafe to display errors directly to users - process the error, log it on your server.
            if ($isAjax) {
                http_response_code(500);
            }

            $response = [
                "status" => false,
                "message" => $smtp_error_message,
                "debug" => $mail->ErrorInfo
            ];
        } else {
            $response = [
                "status" => true,
                "message" => $smtp_success_message
            ];
        }
    } else {
        $response = [
            "status" => false,
            "message" => $smtp_invalid_email_message
        ];
    }

    if ($isAjax) {
        header('Content-type:application/json;charset=utf-8');
        echo json_encode($response);
        exit();
    }
}
?>