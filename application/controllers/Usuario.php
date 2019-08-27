<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('UsuarioModel');
  }

  public function index()
  {
    $data = ['usuarios' => $this->UsuarioModel->getAll('usuario')];
    //renderizamos la vista
    $this->load->view('pages/usuarios/index', $data);
  }

  public function cargar()
  {
    $data = ['usuarios' => $this->UsuarioModel->getAll('usuario')];
    $this->load->view('pages/usuarios/tabla', $data);
  }


  public function insert()
  {
    $data = [
      'nombre' => $_POST['nombre'],
      'apellido' => $_POST['apellido'],
      'username' => $_POST['username'],
      'password ' => $_POST['password'],
      'correo ' => $_POST['correo'],
      'tipo_usuario' => $_POST['tipo'],
      'estado' => 1
    ];
    $this->UsuarioModel->insert($data);
  }

  public function delete($id)
  {
    $data = [
      'estado' => 2
    ];

    $this->UsuarioModel->update($data, $id);
  }

  public function activar($id)
  {
    $data = [
      'estado' => 1
    ];

    $this->UsuarioModel->update($data, $id);
  }

  public function getById($id)
  {
    echo json_encode($this->UsuarioModel->getById($id));
  }

  public function actualizar($id)
  {
    if ($id == 1) {
      $data = [];
    } else {
      $data = [
        'nombre' => $_POST['nombre'],
        'apellido' => $_POST['apellido'],
        'username' => $_POST['username'],
        'password ' => $_POST['password'],
        'correo ' => $_POST['correo'],
        'tipo_usuario' => $_POST['tipo'],
        'estado' => $_POST['estado'],
      ];
    }
    $this->UsuarioModel->update($data, $id);
  }
}
