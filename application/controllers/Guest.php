<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guest extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('categoriaModel');
        $this->load->model('subcategoriaModel');
    }
    public function index()
    {
        // $this->load->view('pages/guest/nav.php');
        $this->load->view('pages/guest/index');
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
}
