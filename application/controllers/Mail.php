<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        // $this->load->library('encrypt');

    }

    public function send()
    {
        //Indicamos el protocolo a utilizar
        $config['protocol'] = 'smtp';

        //El servidor de correo que utilizaremos
        $config["smtp_host"] = 'smtp.googlemail.com';

        //Nuestro usuario
        $config["smtp_user"] = 'chavezyovanyy@gmail.com';

        //Nuestra contraseña
        $config["smtp_pass"] = 'xhwrjdhcvojwqhrv';
        $config["smtp_crypto"] = 'ssl';

        //El puerto que utilizará el servidor smtp
        $config["smtp_port"] = '465';

        //El juego de caracteres a utilizar
        $config['charset'] = 'utf-8';

        //Permitimos que se puedan cortar palabras
        $config['wordwrap'] = TRUE;

        //El email debe ser valido 
        $config['validate'] = true;

        //Establecemos esta configuración
        $this->email->initialize($config);

        //Ponemos la dirección de correo que enviará el email y un nombre
        $this->email->from('chavezyovanyy@gmail.com', 'Yovanyy Chavez');

        /*
       * Ponemos el o los destinatarios para los que va el email
       * en este caso al ser un formulario de contacto te lo enviarás a ti
       * mismo
       */
        $this->email->to('yovanych-@hotmail.com', 'Yovany Chavez');

        //Definimos el asunto del mensaje
        $this->email->subject("Prueba de envio de correos");

        //Definimos el mensaje a enviar
        $this->email->message(
            "Aqui va la prueba de envio de correos"
        );

        echo $this->email->send();
        //Enviamos el email y si se produce bien o mal que avise con una flasdata
        // if ($this->email->send()) {
        //     echo "Lo envio :)";
        // } else {
        //     echo "No lo envio :(";
        // }
    }
}
