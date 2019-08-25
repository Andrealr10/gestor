<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categoria extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('categoriaModel');
        $this->load->model('subcategoriaModel');
    }

    public function index()
    {
        $this->load->view('pages/categorias/index');
    }
    public function load()
    {
        $data = ['categorias' => $this->categoriaModel->getAll()];
        $this->load->view('pages/categorias/lista', $data);
    }

    public function crear()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $categoria = str_replace(' ', '_', $_POST['nombre']);
            $dir = 'home/files/' . $categoria . '/';
            $ruta = 'home/images/categorias/';
            $nombre = $categoria . '.' . (new SplFileInfo($_FILES['imagen']['name']))->getExtension();

            if (!is_dir($dir)) {
                $this->categoriaModel->insert([
                    'nombre' => $categoria,
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
                echo "la categoria ya existe!";
            }
        }
    }
}
