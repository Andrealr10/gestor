<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('categoriaModel');
	}

	public function index()
	{
		$data = ['categorias' => $this->categoriaModel->getAll()];
		// $this->load->library('javascript'); esto ya no tiene soporte
		// $this->load->helper('url'); // Se utiliza un helper para manejo de url
		$this->load->view('includes/navUser',$data); // Menu
		$this->load->view('home'); 
		$this->load->view('includes/foot');
	}
}
