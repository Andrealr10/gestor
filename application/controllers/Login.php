<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
        $this->load->model('UsuarioModel');
        
    }

	public function index() {
		$data = ['usuarios' => $this->UsuarioModel->getAll('usuario')];
		// $data = ['login' => $this->UsuarioModel->getAll('usuario')];
        $this->load->view('pages/login/login');
    }

	public function registroUsuario(){
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