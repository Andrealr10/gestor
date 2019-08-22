<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('UsuarioModel');
    }

	public function index()
	{
        $data=['usuarios'=>$this->UsuarioModel->getAll('usuario')];
        //renderizamos la vista
        $this->load->view('pages/usuarios/index',$data);

    }

    public function cargar()
    {
        $data=['usuarios'=>$this->UsuarioModel->getAll('usuario')];
        $this->load->view('pages/usuarios/tabla',$data);
    }
    
    
    //Función para insertar un registro
  public function insertar() 
  {
    $data= [
        'nombre'=>$_POST['nombre'],
        'apellido'=>$_POST['apellido'],
        'username'=>$_POST['username'],
        'password '=>$_POST['password'],
        'tipo'=>$_POST['tipo'],
        'estado'=>$_POST['estado']];
    $this->UsuarioModel->insert($data);
  }
}
