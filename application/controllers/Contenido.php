<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contenido extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('archivoModel');
        $this->load->model('categoriaModel');
        $this->load->model('subcategoriaModel');
        $this->load->model('solicitudModel');
    }

    public function index()
    {
        $this->categorias();
    }

    /**
     * Mostrar todas las categirias existentes y el formulario para agregar nuevas
     */
    public function categorias()
    {
        $data = ['categorias' => $this->categoriaModel->getAll()];
        if (isset($this->session->login)) {

            if ($this->session->login->tipo_usuario == 1) {
                /**
                 * Para que cargue la vista del admin
                 */
                $this->load->view('pages/admin/inicio/navbar');
                $this->load->view('pages/admin/categorias/index', $data);
            } else {
                /**
                 * Para que cargue la vista del user
                 */
                $this->load->view('pages/user/index', $data);
            }
        } else {
            /**
             * Para que cargue la vista del visitante
             */
            $this->load->view('pages/guest/index', $data);
        }
    }

    /**
     * Metodo para cargar la vista de las subcategorias
     */

    public function loadSubcat($nombre)
    {
        if (isset($nombre)) {
            $categoria = $this->categoriaModel->getByName($nombre);
            $data = [
                'subcategorias' => $this->subcategoriaModel->getByCategoria($categoria->id_categoria),
                'categoria' => $categoria->nombre,
                'id_categoria' => $categoria->id_categoria
            ];
            // $this->load->view('pages/admin/subcategorias/index', $data);
            $this->load->view('pages/user/subcat', $data);
        }
    }
    public function subcategorias($nombre)
    {
        
        if (isset($nombre)) {
            $categoria = $this->categoriaModel->getByName($nombre);
            $data = [
                'subcategorias' => $this->subcategoriaModel->getByCategoria($categoria->id_categoria),
                'categoria' => $categoria->nombre,
                'id_categoria' => $categoria->id_categoria
            ];
            if (isset($this->session->login)) {
                if ($this->session->login->tipo_usuario == 1) {
                    $this->load->view('pages/admin/categorias/subcat', $data);
                } else {

                    $this->load->view('pages/user/subcat', $data);
                }
            } else {
                $this->load->view('pages/user/subcat', $data);
            }
        }
    }
}
