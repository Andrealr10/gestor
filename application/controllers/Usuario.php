<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('UsuarioModel');
    $this->load->model('categoriaModel');
  }

  public function index()
  {
    $data = ['usuarios' => $this->UsuarioModel->getAll('usuario'), 'categorias' => $this->categoriaModel->getAll()];
    //renderizamos la vista
    $this->load->view('pages/admin/inicio/header', $data);
    $this->load->view('pages/admin/usuarios/index', $data);
    $this->load->view('pages/admin/inicio/footer');
  }

  public function cargar()
  {
    $data = ['usuarios' => $this->UsuarioModel->getAll('usuario')];
    $this->load->view('pages/admin/usuarios/tabla', $data);
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
      'estado' => 1,
      'hash' => hash('sha256', $_POST['username'] . date("Y-m-d H:i:s"), false),
      'code' => rand(10000, 99999)
    ];
    $this->UsuarioModel->insert($data);
  }

  public function registrar()
  {
    $data = [
      'nombre' => $_POST['nombre'],
      'apellido' => $_POST['apellido'],
      'username' => $_POST['username'],
      'password ' => password_hash($_POST['password'], PASSWORD_DEFAULT),
      'correo ' => $_POST['correo'],
      'tipo_usuario' => 2,
      'estado' => 0,
      'hash' => hash('sha256', $_POST['username'] . date("Y-m-d H:i:s"), false),
      'code' => rand(10000, 99999)
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

  // actualizar los datos de usuario
  public function actualizar($id)
  {
    if ($id == 1) {
      $data = [];
    } else {
      $data = [
        'nombre' => $_POST['nombre'],
        'apellido' => $_POST['apellido'],
        'tipo_usuario' => $_POST['tipo'],
        'correo' => $_POST['correo'],
      ];
    }
    $this->UsuarioModel->update($data, $id);
  }
  public function actualizar2($id)
  {
    $data = [
      'nombre' => $_POST['nombre'],
      'apellido' => $_POST['apellido'],
      'correo' => $_POST['correo'],
    ];
    $this->UsuarioModel->update($data, $id);
    $this->session->login = $this->UsuarioModel->getById($id);
  }

  public function reset($hash = null)
  {
    if ($hash != null) {
      $user = $this->UsuarioModel->getByHash($hash);
      $data = ['usuario' => $user];
      if ($user != null) {
        $this->load->view('pages/admin/usuarios/reset', $data);
      } else {
        // echo "este enlace ya no es valido :V";
        $this->load->view('pages/admin/usuarios/error');
      }
    }
  }

  public function cambiar()
  {
    $id = $_POST['id_usuario'];
    if ($id != null) {
      $data = [
        'password ' => $_POST['password'],
        'hash' => hash('sha256', $_POST['username'] . date("Y-m-d H:i:s"), false)
      ];
    } else { }
    $this->UsuarioModel->update($data, $id);
  }

  public function validar()
  {
    $correo = $_POST['correo'];
    $usuario = $this->UsuarioModel->getByCorreo($correo);
    if ($usuario->code == $_POST['codigo']) {
      $this->activar($usuario->id_usuario);
      echo 1;
    }
    echo 0;
  }

  public function validarUser()
  {
    $correo = $_POST['username'];
    $usuario = $this->UsuarioModel->getByUsername($correo);
    if ($usuario != null) {
      echo 1;
    }
  }

  public function validarCorreo()
  {
    $correo = $_POST['correo'];
    $usuario = $this->UsuarioModel->getByCorreo($correo);
    if ($usuario != null) {
      echo 1;
    }
  }
}
