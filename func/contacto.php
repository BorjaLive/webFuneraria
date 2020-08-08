<?php
    header('Access-Control-Allow-Origin: *');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    require 'vendor/autoload.php';

    $MAIL_HOST = "smtp.gmail.com";
    $MAIL_PORT = 587;
    $MAIL = "vencejocam1@gmail.com";
    $MAIL_USER = "Vencejocam";
    $MAIL_PASS = "colegiovirgendelrocio";
    $MAIL_TO = "funelagranada@gmail.com";
    $MAIL_TO_NAME = "funelagranada";

    if(empty($_POST["nombre"]) or empty($_POST["apellidos"]) or empty($_POST["email"]) or empty($_POST["mensaje"])){
        header("Location: /contacto?error=1");
        die();
    }

    $recaptcha = $_POST['g-recaptcha-response'];
    $res = reCaptcha($recaptcha);
    if(!$res['success']){
        header("Location: /contacto?error=2");
    }else{
		$mail = new PHPMailer;
		$mail->isSMTP();
		$mail->SMTPDebug = SMTP::DEBUG_OFF;
		$mail->Host = $MAIL_HOST;
		$mail->Port = $MAIL_PORT;
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		$mail->SMTPAuth = true;
		$mail->isHTML(true);
		$mail->CharSet = 'UTF-8';

		$mail->Username = $MAIL;
		$mail->Password = $MAIL_PASS;

		$mail->setFrom($MAIL, $MAIL_USER);
		$mail->addReplyTo($_POST["email"], $_POST["nombre"].", ".$_POST["apellidos"]);
		$mail->addAddress($MAIL_TO, $MAIL_TO_NAME);

		$mail->Subject = "WEB Contacto";
		$mail->Body = "<h1>Contacto por la página web</h1>
						<p>De: ".$_POST["nombre"].", ".$_POST["apellidos"]."</p>
						<p>Email: ".$_POST["email"]."</p>
						<p>Telefono: ".$_POST["telefono"]."</p><hr>
						<p>".$_POST["mensaje"]."</p>";

		$res = $mail->send();
		//echo 'Mailer Error: '. $mail->ErrorInfo;
        if($res)
            header("Location: /contacto?exito=1");
        else
            header("Location: /contacto?error=3");
    }
    die();

    function reCaptcha($recaptcha){
        $secret = "6Ldza7sZAAAAAE88POT94SarikUPQs5QA49qUA7x";
        $ip = $_SERVER['REMOTE_ADDR'];

        $postvars = array("secret"=>$secret, "response"=>$recaptcha, "remoteip"=>$ip);
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
        $data = curl_exec($ch);
        curl_close($ch);

        return json_decode($data, true);
    }
?>
