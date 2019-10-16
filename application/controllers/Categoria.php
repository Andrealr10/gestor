<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categoria extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('categoriaModel');
        $this->load->model('subcategoriaModel');
    }

    /**
     * Mostrar todas las categirias existentes y el formulario para agregar nuevas
     */
    public function index()
    {
        // $this->load->view('pages/admin/inicio/navbar');
        // $data = ['categorias' => $this->categoriaModel->getAll()];
        // $this->load->view('pages/admin/categorias/index', $data);
        $data = ['categorias' => $this->categoriaModel->getAll()];
        if (isset($this->session->login)) {

            if ($this->session->login->tipo_usuario == 1) {
                /**
                 * Para que cargue las cosas del admin
                 */
                $this->load->view('pages/admin/inicio/header', $data);
                $this->load->view('pages/admin/categorias/index', $data);
                $this->load->view('pages/admin/inicio/footer', $data);
            } else {
                $this->load->view('pages/user/index', $data);
            }
        } else {
            $this->load->view('pages/guest/index', $data);
        }
    }

    // /**
    //  * Refrescar las categorias que se muestran 
    //  */
    public function load()
    {
        // $data = ['categorias' => $this->categoriaModel->getAll()];
        // $this->load->view('pages/admin/categorias/categorias', $data);
        $data = ['categorias' => $this->categoriaModel->getAll()];
        if (isset($this->session->login)) {

            if ($this->session->login->tipo_usuario == 1) {
                /**
                 * Para que cargue las cosas del admin
                 */
                $this->load->view('pages/admin/categorias/categorias', $data);
            } else {
                $this->load->view('pages/user/categorias', $data);
            }
        } else {
            $this->load->view('pages/guest/categorias', $data);
        }
    }

    /**
     * Metodo para crear una nueva categoria
     */
    public function crear()
    {
        if (isset($this->session->login)) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $categoria = str_replace(' ', '_', $this->tildes($_POST['nombre']));
                $dir = 'home/files/' . $categoria . '/';
                $ruta = 'home/images/categorias/';
                $nombre = $categoria . '.' . (new SplFileInfo($_FILES['imagen']['name']))->getExtension();

                if (!is_dir($dir)) {
                    $this->categoriaModel->insert([
                        'nombre' => $categoria,
                        'descripcion' => $_POST['descripcion'],
                        'imagen' => $ruta . $nombre,
                        'estado' => 1
                    ]);
                    mkdir($dir, 0755, TRUE);
                    $config['upload_path'] = $ruta;
                    $config['file_name'] = $nombre;
                    $config['allowed_types'] = "png|jpg|jpeg";
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('imagen')) {
                        echo $this->upload->display_errors();
                        return;
                    }
                } else {
                    echo "la categoria ya existe!";
                }
            }
        } else {
            echo "error";
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
