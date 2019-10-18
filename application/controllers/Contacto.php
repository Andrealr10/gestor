<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contacto extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
        $this->load->model('categoriaModel');
        $this->load->model('notificacionModel');
	}

	public function index()
	{
		$data = ['notificaciones' => $this->notificacionModel->getAll(), 'categorias' => $this->categoriaModel->getAll()];
		$this->load->view('pages/user/header', $data); // Menu
		$this->load->view('pages/contacto/contacto', $data);
		$this->load->view('pages/user/footer');
	}

	public function load()
	{
		$this->load->view('pages/contacto/contacto');
	}
}
