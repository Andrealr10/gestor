<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subcategoria extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('subcategoriaModel');
        $this->load->model('categoriaModel');
    }

    public function find($id)
    {
        $data = [
            'subcategorias' => $this->subcategoriaModel->getByCategoria($id), 
            'id' => $id, 
            'nombre' => ($this->categoriaModel->getById($id))->nombre
        ];
        $this->load->view('pages/categorias/subcategorias', $data);
    }

    public function load($id)
    {
        $this->load->view('pages/categorias/frmsubcategorias', ['id' => $id]);
    }


    public function crear()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $subcategoria = $_POST['nombre'];
            $categoria = ($this->categoriaModel->getById($_POST['categoria']))->nombre;
            $dir = 'home/files/' . $categoria . '/' . $subcategoria . '/';
            $ruta = 'home/images/subcategorias/';
            $nombre = $subcategoria . '.' . (new SplFileInfo($_FILES['imagen']['name']))->getExtension();
            if (!is_dir($dir)) {

                $this->subcategoriaModel->insert([
                    'nombre' => $subcategoria,
                    'estado' => 1,
                    'imagen' => $ruta . $nombre,
                    'id_categoria' => $_POST['categoria']
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
                echo "la subcategoria ya existe!";
            }
        }
    }
}
