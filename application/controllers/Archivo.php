<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Archivo extends CI_Controller
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
        $this->load->view('pages/admin/inicio/navbar');
        $this->load->view('pages/admin/archivos/archivo');
    }

    /**
     * Mostrar todos los archivos aprobados de la categoria
     */
    public function load($categoria, $subcategoria)
    {
        $this->load->view('pages/admin/home/index');
        $data = ['categorias' => $this->categoriaModel->getAll()];
        // $this->load->view('includes/navUser',$data); 
        if (isset($subcategoria) && isset($categoria)) {
            $categoria = $this->categoriaModel->getByName($categoria);
            $subcategoria = $this->subcategoriaModel->getByName($subcategoria);
            $data = [
                'archivos' => $this->archivoModel->getBySubCategoria($subcategoria->id_subcategoria),
                'categoria' => $categoria,
                'subcategoria' => $subcategoria
            ];
            $this->load->view('pages/admin/archivos/index', $data);
        }
    }

    /**
     * Descargar el archivo seleccionado
     */
    public function download($categoria, $subcategoria, $archivo)
    {
        $this->load->helper('download');
        force_download('home/files/' . $categoria . '/' . $subcategoria . '/' . $archivo, null);
    }


    /**
     * Subir archivos
     */
    public function fileUpload($id)
    {
        if (!empty($_FILES['file']['name'])) {
            $extension = (new SplFileInfo($_FILES['file']['name']))->getExtension();
            if ($extension == 'ppt' || $extension == 'pptx') {
                $tipo = 'Presentacion';
            } else {
                $tipo = 'Documento';
            }
            $nombre = str_replace(' ', '_', $_FILES['file']['name']);
            $config['upload_path'] = 'home/uploads';
            $config['allowed_types'] = 'txt|pdf|doc|docx|ppt|pptx|odt|';
            $config['max_size']    = '10240'; // max_size in kb
            $config['file_name'] = $nombre;
            $config['overwrite'] = false;
            $this->load->library('upload', $config);
            // File upload
            if ($this->upload->do_upload('file')) {

                $upload_data = $this->upload->data();
                $nombre =   $upload_data['file_name'];
                $this->archivoModel->insert([
                    'archivo' => $nombre,
                    'ruta' => 'home/uploads/' . $nombre,
                    'tamanio' => $_FILES['file']['size'],
                    'estado' => 0,
                    'tipo_archivo' => $tipo,
                    'fecha' => date("Y-m-d H:i:s"),
                    'descargas' => 0,
                    'valoracion' => 0,
                    'icono' => 'home/images/archivos/' . $extension . '.png',
                    'id_usuario' => 1,
                    'id_subcategoria' => $id
                ]);
                $this->solicitudModel->insert([
                    'descripcion' => 'Aprobar archivo',
                    'estado' => 1,
                    'id_tipo_solicitud' => 1,
                    'id_usuario' => 1
                ]);
            }
        }
    }
}
