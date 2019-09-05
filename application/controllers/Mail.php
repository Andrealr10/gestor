<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mail extends CI_Controller
{
    function  __construct()
    {
        parent::__construct();
        $this->load->model('usuarioModel');
    }

    public function cambio()
    {
        $correo = $_POST['correo'];

        if ($correo != null) {
            $usuario = $this->usuarioModel->getByCorreo($correo);
            if ($usuario != null) {

                $this->send($correo, $usuario->hash);
            }
        }
    }
    function send($correo = null, $hash = null)
    {
        // Load PHPMailer library
        $this->load->library('phpmailer_lib');

        // PHPMailer object
        $mail = $this->phpmailer_lib->load();

        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'cloudcat.inc@gmail.com';
        $mail->Password = 'ykrzrqwxzfixpibp';
        $mail->SMTPSecure = 'tls';
        $mail->Port     = 587;

        $mail->setFrom('cloudcat.inc@gmail.com', 'CloudCat');

        // Add a recipient
        $mail->addAddress($correo);

        // Add cc or bcc 
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // Email subject
        $mail->Subject = 'Cambio de contraseña';

        // Set email format to HTML
        // $mail->isHTML(true);

        // Email body content
        $mailContent = "Has clic en el siguiente enlace para cambiar la contraseña http://localhost/gestor/usuario/reset/".$hash;
        $mail->Body = $mailContent;

        // Send email
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }
}
