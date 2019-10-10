<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
		$this->load->view('pages/admin/inicio/navbar.php'); // Menu
		$this->load->view('pages/admin/categorias/index');
		
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
                'archivos2' => $this->archivoModel->getByUsuario($subcategoria->id_subcategoria,1),
                'categoria' => $categoria,
                'subcategoria' => $subcategoria
            ];
            $this->load->view('pages/admin/archivos', $data);
        }
    }
}
