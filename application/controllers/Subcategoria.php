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

    /**
     * Cargar las subcategorias que dependen de la categoria
     */
    public function index($id = null)
    {
    
        if (isset($id)) {
            $data = [
                'subcategorias' => $this->subcategoriaModel->getByCategoria($id),
                'categoria' => ($this->categoriaModel->getById($id))->nombre,
                'id_categoria' => $id
            ];
            $this->load->view('pages/admin/subcategorias/index', $data);
        }
    }

    // public function find($id)
    // {
    //     $data = [
    //         'subcategorias' => $this->subcategoriaModel->getByCategoria($id),
    //         'id' => $id,
    //         'nombre' => ($this->categoriaModel->getById($id))->nombre
    //     ];
    //     $this->load->view('pages/categorias/subcategorias', $data);
    // }

    /**
     * En algun momento tal vez sirve
     */
    public function load($nombre = null)
    {
       
        $this->session->set_userdata(['nombre' => $nombre]);
        if (isset($nombre)) {
            $categoria = $this->categoriaModel->getByName($nombre);
            $data = [
                'subcategorias' => $this->subcategoriaModel->getByCategoria($categoria->id_categoria),
                'categoria' => $categoria->nombre,
                'id_categoria' => $categoria->id_categoria
            ];
            $this->load->view('pages/admin/subcategorias/index', $data);
        }
    }

    /**
     * Funcion para crear la subcategoria
     */
    public function crear()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $subcategoria = str_replace(' ', '_', $_POST['nombre']);
            $categoria = ($this->categoriaModel->getById($_POST['categoria']))->nombre;
            $dir = 'home/files/' . $categoria . '/' . $subcategoria . '/';
            if (!is_dir($dir)) {

                $this->subcategoriaModel->insert([
                    'nombre' => $subcategoria,
                    'estado' => 1,
                    'imagen' => 'home/images/subcategorias/carpeta.png',
                    'id_categoria' => $_POST['categoria']
                ]);

                mkdir($dir, 0755, TRUE);
            } else {
                echo "la subcategoria ya existe!";
            }
        }
    }
}
