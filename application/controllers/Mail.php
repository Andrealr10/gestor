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
                $asunto = 'Cambio de contraseña';
                $cuerpo = "Has clic en el siguiente enlace para cambiar la contraseña \n\n".base_url()."usuario/reset/" . $usuario->hash;
                $this->send($correo, $asunto, $cuerpo);
            }
        }
    }

    public function registro()
    {
        $correo = $_POST['correo'];

        if ($correo != null) {
            $usuario = $this->usuarioModel->getByCorreo($correo);
            if ($usuario != null) {
                $asunto = 'Bienvenido a SUDOCS';
                $cuerpo = "Bienvenido a SUDOCS " . $usuario->username . "!\nAhora podras compartir archivos en la plataforma.\nTu codigo de verificacion es: " . $usuario->code;
                $this->send($correo, $asunto, $cuerpo);
            }
        }
    }


    function send($correo = null, $asunto = null, $cuerpo = null)
    {
        // Load PHPMailer library
        $this->load->library('mailer');

        // PHPMailer object
        $mail = $this->mailer->load();

        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'sudocs.inc@gmail.com';
        $mail->Password = 'remfpmlvdnrxstjx';
        $mail->SMTPSecure = 'tls';
        $mail->Port     = 587;

        $mail->setFrom('sudocs.inc@gmail.com', 'SUDOCS');

        // Add a recipient
        $mail->addAddress($correo);

        // Add cc or bcc 
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // Email subject
        $mail->Subject = $asunto;

        // Set email format to HTML
        // $mail->isHTML(true);

        // Email body content
        $mail->Body = $cuerpo;

        // Send email
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }
}
