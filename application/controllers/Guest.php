<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guest extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('categoriaModel');
        $this->load->model('subcategoriaModel');
        $this->load->model('archivoModel');
    }
    public function index()
    {
        $data = ['categorias' => $this->categoriaModel->getAll()];
        // $this->load->view('pages/guest/nav.php');
        $this->load->view('pages/guest/index',$data);
    }

    public function loadCat()
    {
        $data = ['categorias' => $this->categoriaModel->getAll()];
        $this->load->view('pages/guest/categorias', $data);
    }

    public function loadSub($nombre)
    {
        if (isset($nombre)) {
            $categoria = $this->categoriaModel->getByName($nombre);
            $data = [
                'subcategorias' => $this->subcategoriaModel->getByCategoria($categoria->id_categoria),
                'categoria' => $categoria->nombre,
                'id_categoria' => $categoria->id_categoria
            ];
            // $this->load->view('pages/admin/subcategorias/index', $data);
            $this->load->view('pages/guest/subcategorias', $data);
        }
    }

    public function loadAr($categoria, $subcategoria)
    {
        $data = ['categorias' => $this->categoriaModel->getAll()];
        // $this->load->view('includes/navUser',$data); 
        if (isset($subcategoria) && isset($categoria)) {
            $categoria = $this->categoriaModel->getByName($categoria);
            $subcategoria = $this->subcategoriaModel->getByName($subcategoria);
            $data = [
                'archivos' => $this->archivoModel->getBySubCategoria($subcategoria->id_subcategoria),
                'categoria' => $categoria,
                'subcategoria' => $subcategoria
            ];
            $this->load->view('pages/guest/archivos', $data);
        }
    }
}
