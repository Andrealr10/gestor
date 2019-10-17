<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subcategoria extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('subcategoriaModel');
        $this->load->model('categoriaModel');
    }

    /**
     * Cargar las subcategorias que dependen de la categoria
     */
    public function index($id = null)
    {

        if (isset($id)) {
            $data = [
                'subcategorias' => $this->subcategoriaModel->getByCategoria($id),
                'categoria' => ($this->categoriaModel->getById($id))->nombre,
                'id_categoria' => $id
            ];
            if (isset($this->session->login)) {

                if ($this->session->login->tipo_usuario == 1) {
                    /**
                     * Para que cargue las cosas del admin
                     */
                    $this->load->view('pages/admin/inicio/navbar');
                    $this->load->view('pages/admin/subcategorias/index', $data);
                } else {
                    $this->load->view('pages/user/index', $data);
                }
            } else {
                $this->load->view('pages/guest/subcategorias', $data);
            }
        }
    }

    // public function find($id)
    // {
    //     $data = [
    //         'subcategorias' => $this->subcategoriaModel->getByCategoria($id),
    //         'id' => $id,
    //         'nombre' => ($this->categoriaModel->getById($id))->nombre
    //     ];
    //     $this->load->view('pages/categorias/subcategorias', $data);
    // }

    /**
     * En algun momento tal vez sirve
     */
    public function load($nombre = null)
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
                    $this->load->view('pages/admin/categorias/subcategoria', $data);
                } else {
                    $this->load->view('pages/user/subcategorias', $data);
                }
            } else {
                $this->load->view('pages/guest/subcategorias', $data);
            }
        }
    }

    /**
     * Funcion para crear la subcategoria
     */
    public function crear()
    {
        if (isset($this->session->login) && $this->session->login->tipo_usuario == 1) {

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $subcategoria = str_replace(' ', '_', $this->tildes($_POST['nombre']));
                $categoria = ($this->categoriaModel->getById($_POST['categoria']))->nombre;
                $dir = 'home/files/' . $categoria . '/' . $subcategoria . '/';
                $dir2 = 'home/files/' . $categoria . '/' . $subcategoria . '_temp/';
                if (!is_dir($dir)) {

                    $this->subcategoriaModel->insert([
                        'nombre' => $subcategoria,
                        'estado' => 1,
                        'imagen' => 'home/images/subcategorias/carpeta.png',
                        'id_categoria' => $_POST['categoria']
                    ]);

                    mkdir($dir, 0755, TRUE);
                    mkdir($dir2, 0755, TRUE);
                } else {
                    echo "la subcategoria ya existe!";
                }
            }
        }
    }

    public function tildes($cadena)
    {
        //Reemplazamos la A y a
        $cadena = str_replace(
            array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),
            array('A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a'),
            $cadena
        );

        //Reemplazamos la E y e
        $cadena = str_replace(
            array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),
            array('E', 'E', 'E', 'E', 'e', 'e', 'e', 'e'),
            $cadena
        );

        //Reemplazamos la I y i
        $cadena = str_replace(
            array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),
            array('I', 'I', 'I', 'I', 'i', 'i', 'i', 'i'),
            $cadena
        );

        //Reemplazamos la O y o
        $cadena = str_replace(
            array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),
            array('O', 'O', 'O', 'O', 'o', 'o', 'o', 'o'),
            $cadena
        );

        //Reemplazamos la U y u
        $cadena = str_replace(
            array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),
            array('U', 'U', 'U', 'U', 'u', 'u', 'u', 'u'),
            $cadena
        );

        //Reemplazamos la N, n, C y c
        $cadena = str_replace(
            array('Ñ', 'ñ', 'Ç', 'ç'),
            array('Ni', 'ni', 'C', 'c'),
            $cadena
        );

        return $cadena;
    }
}
