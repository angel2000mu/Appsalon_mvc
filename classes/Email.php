<?php

namespace Classes;
use PHPMailer\PHPMailer\PHPMailer;

class Email {
    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token) 
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }
    public function enviarConfirmacion() {
        // crear el objeto del email

        $mail = new phpMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '36b427d8e3cfef';
        $mail->Password = '12c26f4d1672d5';    

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuenta@appsalon.com', 'AppSalon.com');
        $mail->Subject = 'Confirmar tu cuenta';

        // SET HTML
        $mail->isHTML(true);
        $mail->CharSet = 'UFT-8';

        $contendio = "<HTML>";
        $contendio .= "<p><strong>Hola " . $this->nombre . "</strong> Has creado tu cuenta en App Salon, solo debes confirmarla presionando el siguiente enlace. </p>";
        $contendio .= "<p>Presiona aquí: <a href='http://localhost:3000/confirmar-cuenta?token=" . $this->token . "'>Restablecer Password</a></p>";
        $contendio .= "<p>Si tú no solisitaste esta cuenta ignorar este mensaje</p>";
        $contendio .= "</HTML>";
        $mail->Body =$contendio;

        $mail->send();
    }

    public function EnviarInstrucciones() {

        $mail = new phpMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '36b427d8e3cfef';
        $mail->Password = '12c26f4d1672d5';    

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuenta@appsalon.com', 'AppSalon.com');
        $mail->Subject = 'Restablece tu password';

        // SET HTML
        $mail->isHTML(true);
        $mail->CharSet = 'UFT-8';

        $contendio = "<HTML>";
        $contendio .= "<p><strong>Hola " . $this->nombre . "</strong> Has solicitado restablecer tu password, sigue el siguiente enlace para hacerlo.</p>";
        $contendio .= "<p>Presiona aquí: <a href='http://localhost:3000/recuperar?token=" . $this->token . "'>Confirmar Cuenta</a></p>";
        $contendio .= "<p>Si tú no solisitaste esta cuenta ignorar este mensaje</p>";
        $contendio .= "</HTML>";
        $mail->Body =$contendio;

        $mail->send();
    }
}