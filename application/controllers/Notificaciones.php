<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notificaciones extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('notificacionModel');
		$this->load->model('categoriaModel');
	}

	public function index()
	{
		$data = ['notificaciones' => $this->notificacionModel->getAll(), 'categorias' => $this->categoriaModel->getAll()];
		$this->load->view('pages/admin/inicio/header', $data); // Menu
		$this->load->view('pages/admin/notificaciones/index', $data);
		$this->load->view('pages/admin/inicio/footer');
	}

}
