<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notificaciones extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('notificacionModel');
	}

	public function index()
	{
		$data = ['notificaciones' => $this->notificacionModel->getAll()];
		$this->load->view('pages/admin/home/index.php'); // Menu
		$this->load->view('pages/admin/notificaciones/index', $data);
	}

	public function load($tipo = null)
	{
		if ($tipo != 'null') {
			$data = ['notificaciones' => $this->notificacionModel->getByTipo($tipo)];
			$this->load->view('pages/admin/notificaciones/tabla', $data);
			
		} else {
			$data = ['notificaciones' => $this->notificacionModel->getAll()];
			$this->load->view('pages/admin/notificaciones/tabla', $data);
		}
	}
}
