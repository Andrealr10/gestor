<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Valoracion extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('valoracionModel');
        $this->load->model('solicitudModel');
    }

    public function valorar()
    {
        $existe = $this->valoracionModel->getByUser($_POST['id_usuario'],$_POST['id_archivo']);

        if ($existe != null) {
            $this->valoracionModel->update([
                'valoracion' => $_POST['rate'],
            ],$existe->id_valoracion);
        } else {
            $this->valoracionModel->insert([
                'valoracion' => $_POST['rate'],
                'comentario' => '',
                'id_usuario' => $_POST['id_usuario'],
                'id_archivo' => $_POST['id_archivo'],
            ]);
        }
    }
}
