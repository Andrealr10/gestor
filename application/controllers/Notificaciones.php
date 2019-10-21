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
		$this->load->view('pages/admin/notificaciones/timeline', $data);
		$this->load->view('pages/admin/inicio/footer');
	}

	public function load($estado)
	{
		if ($estado == 'null') {
			$estado = 1;
		}
		$data = ['notificaciones' => $this->notificacionModel->getByEstado($estado)];
		$this->load->view('pages/admin/notificaciones/timeline', $data);
	}

	public function crear()
	{
		$this->notificacionModel->insert([
			'descripcion' => $_POST['comentario'],
			'estado' => 1,
			'fecha' =>  date("Y-m-d H:i:s"),
			'id_tipo_solicitud' => 1,
			'id_usuario' => $this->session->login->id_usuario,
			'titulo' => $_POST['titulo']
		]);
	}
}
