<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Archivo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('archivoModel');
    }

    public function index()
    {
        $data = ['archivos' => $this->archivoModel->getBySubCategoria(1)];
        $this->load->view('pages/archivos/archivos.php', $data);
    }

    public function download($categoria, $subcategoria, $archivo)
    {
        $this->load->helper('download');
        force_download('home/files/'.$categoria.'/'.$subcategoria.'/'.$archivo, null);
    }





    public function load()
    {
        $data = ['archivos' => $this->archivoModel->getAll()];
        $this->load->view('pages/archivos/lista', $data);
    }

    public function fileUpload()
    {
        if (!empty($_FILES['file']['name'])) {

            // Set preference
            $config['upload_path'] = 'home/files/';
            $config['allowed_types'] = 'pdf';
            $config['max_size']    = '10240'; // max_size in kb
            $config['file_name'] = $_FILES['file']['name'];

            //Load upload library
            $this->load->library('upload', $config);

            // File upload
            if ($this->upload->do_upload('file')) {
                // Get data about the file
                $uploadData = $this->upload->data();
            }
        }
    }

    public function crear()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $archivo = $_POST['nombre'];
            $dir = 'home/files/' . $archivo . '/';
            $ruta = 'home/images/archivos/';
            $nombre = $archivo . '.' . (new SplFileInfo($_FILES['imagen']['name']))->getExtension();

            if (!is_dir($dir)) {

                $this->archivoModel->insert([
                    'nombre' => $archivo,
                    'descripcion' => $_POST['descripcion'],
                    'imagen' => $ruta . $nombre,
                    'estado' => 1
                ]);

                mkdir($dir, 0755, TRUE);

                $config['upload_path'] = $ruta;
                $config['file_name'] = $nombre;
                $config['allowed_types'] = "png|jpg|jpeg";
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('imagen')) {
                    echo $this->upload->display_errors();
                    return;
                }
            } else {
                echo "la archivo ya existe!";
            }
        }
    }
}
