<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('usuarioModel');
	}

	public function index()
	{
		if (isset($this->session->login)) {
			redirect(base_url('categoria'));
		} else {
			if (isset($_POST['nombre'])) {
				$this->registrar();
			} else {
				$this->load->view('pages/login/login');
				$this->login();
			}
		}
	}

	public function login()
	{
		if (isset($_POST['user']) && isset($_POST['pass'])) {
			$user = $_POST['user'];
			$pas = $_POST['pass'];

			if ($user != null && $user != '' && $pas != null && $pas != '') {

				$usuario = $this->usuarioModel->login($user, $pas);
				if ($usuario != null) {
					$this->session->set_userdata('login', $usuario);
				}
			} else {
				$error = ['<div class="alert alert-danger row" role="alert">Ingrese un usuario y contraseña</div>', ''];
			}
			$this->index();
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('login');
		redirect(base_url());
	}

	public function registrar()
	{
		$data = [
			'nombre' => $_POST['nombre'],
			'apellido' => $_POST['apellido'],
			'username' => $_POST['username'],
			'password ' => $_POST['password'],
			'correo ' => $_POST['correo'],
			'tipo_usuario' => 2,
			'estado' => 0,
			'hash' => hash('sha256', $_POST['username'] . date("Y-m-d H:i:s"), false),
			'code' => rand(10000, 99999)
		];
		$this->usuarioModel->insert($data);
	}
}

// $this->session->sess_destroy();
