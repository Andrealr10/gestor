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
			redirect(base_url('user'));
		} else {
			$this->load->view('pages/login/login');
			$this->login();
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
		session_start();
		session_unset();
		session_destroy();
		redireccionar('main');
	}

	public function registroUsuario()
	{
		$data = [
			'nombre' => $_POST['nombre'],
			'apellido' => $_POST['apellido'],
			'username' => $_POST['user'],
			'password ' => $_POST['pass1'],
			'correo ' => $_POST['correo'],
			'tipo_usuario' => 2,
			'estado' => 1
		];
		$this->UsuarioModel->insert($data);
	}
}

// $this->session->sess_destroy();
