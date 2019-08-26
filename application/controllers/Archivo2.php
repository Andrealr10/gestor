<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Archivo2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('archivoModel');
    }

    public function index()
    {
        $this->load->view('pages/archivos/index2');
    }

    public function fileUpload()
    {
        if (!empty($_FILES['file']['name'])) {

            $nombre = str_replace(' ', '_', $_FILES['file']['name']);
            $config['upload_path'] = 'home/uploads';
            $config['allowed_types'] = 'txt|pdf';
            $config['max_size']    = '10240'; // max_size in kb
            $config['file_name'] = $nombre;
            $config['overwrite'] = TRUE;
            $this->load->library('upload', $config);
            // File upload
            if ($this->upload->do_upload('file')) {
               $this->archivoModel->insert([
                   'archivo' => $nombre,
                   'ruta' => 'home/uploads/'.$nombre,
                   'tamanio' => $_FILES['file']['size'],
                   'estado' => 0,
                   'fecha' => date("Y-m-d H:i:s"),
                   'descargas' => 0,
                   'id_usuario' => 1,
                   'id_subcategoria' => 1,
                   'id_tipo_archivo' => 1
               ]);
            }
        }
    }

}