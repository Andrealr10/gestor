<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH.'controllers/Utils.php';

class Archivo extends Utils
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('archivoModel');
        $this->load->model('categoriaModel');
        $this->load->model('subcategoriaModel');
        $this->load->model('solicitudModel');
    }

    // public function index()
    // {
    //     $this->load->view('pages/admin/inicio/navbar');
    //     $this->load->view('pages/admin/archivos/archivo');
    // }

    public function vista($categoria, $subcategoria)
    {
        $categoria = $this->categoriaModel->getByName($categoria);
        $subcategoria = $this->subcategoriaModel->getByName($categoria->id_categoria, $subcategoria);
        $data = [
            'archivos' => $this->archivoModel->getByUsuario($subcategoria->id_subcategoria, $this->session->login->id_usuario),
            'categoria' => $categoria,
            'subcategoria' => $subcategoria
        ];
        if (isset($this->session->login)) {
            if ($this->session->login->tipo_usuario == 1) {
                $this->load->view('pages/admin/archivos/archivos', $data);
            } else {
                $this->load->view('pages/user/subir', $data);
            }
        } else {
            $this->load->view('pages/guest/archivos', $data);
        }
    }

    public function pendientes($categoria, $subcategoria)
    {
        $categoria = $this->categoriaModel->getByName($categoria);
        $subcategoria = $this->subcategoriaModel->getByName($categoria->id_categoria, $subcategoria);
        $data = [
            'archivos' => $this->archivoModel->getPendientes($subcategoria->id_subcategoria),
            'categoria' => $categoria,
            'subcategoria' => $subcategoria
        ];
        if (isset($this->session->login)) {
            if ($this->session->login->tipo_usuario == 1) {
                $this->load->view('pages/admin/archivos/pendientes', $data);
            } else {
                $this->load->view('pages/user/pendientes', $data);
            }
        } else {
            $this->load->view('pages/guest/archivos', $data);
        }
    }

    public function cancelados($categoria, $subcategoria)
    {
        $categoria = $this->categoriaModel->getByName($categoria);
        $subcategoria = $this->subcategoriaModel->getByName($categoria->id_categoria, $subcategoria);
        $data = [
            'archivos' => $this->archivoModel->getCancelados($subcategoria->id_subcategoria),
            'categoria' => $categoria,
            'subcategoria' => $subcategoria
        ];
        if (isset($this->session->login)) {
            if ($this->session->login->tipo_usuario == 1) {
                $this->load->view('pages/admin/archivos/cancelados', $data);
            } else {
                $this->load->view('pages/user/cancelados', $data);
            }
        } else {
            $this->load->view('pages/guest/archivos', $data);
        }
    }

    /**
     * Mostrar todos los archivos aprobados de la categoria
     */
    public function load($categoria, $subcategoria)
    {
        // $data = ['categorias' => $this->categoriaModel->getAll()];
        if (isset($subcategoria) && isset($categoria)) {
            $categoria = $this->categoriaModel->getByName($categoria);
            $subcategoria = $this->subcategoriaModel->getByName($categoria->id_categoria, $subcategoria);
            $data = [
                'archivos' => $this->archivoModel->getBySubCategoria($subcategoria->id_subcategoria),
                'categoria' => $categoria,
                'subcategoria' => $subcategoria
            ];
            if (isset($this->session->login)) {
                if ($this->session->login->tipo_usuario == 1) {
                    $this->load->view('pages/admin/archivos/archivo', $data);
                } else {
                    $this->load->view('pages/user/archivos', $data);
                }
            } else {
                $this->load->view('pages/guest/archivos', $data);
            }
        }
    }

    public function loadByUser($categoria, $subcategoria, $user)
    {
        if (isset($subcategoria) && isset($categoria) && isset($user)) {
            $categoria = $this->categoriaModel->getByName($categoria);
            $subcategoria = $this->subcategoriaModel->getByName($subcategoria);
            $data = [
                'archivos' => $this->archivoModel->getByUsuario($subcategoria->id_subcategoria, $this->session->login->id_usuario),
                'categoria' => $categoria,
                'subcategoria' => $subcategoria
            ];
            if (isset($this->session->login)) {
                if ($this->session->login->tipo_usuario == 1) {
                    $this->load->view('pages/porsiacaso/archivos/index', $data);
                } else {
                    $this->load->view('pages/user/subir', $data);
                }
            } else {
                $this->load->view('pages/guest/archivos', $data);
            }
        }
    }

    /**
     * Descargar el archivo seleccionado
     */
    public function download($id, $categoria, $subcategoria, $archivo)
    {
        $archiv = $this->archivoModel->getById($id);
        $this->archivoModel->update([
            'descargas' => ($archiv->descargas + 1)
        ], $id);
        $this->load->helper('download');
        force_download('home/files/' . $categoria . '/' . $subcategoria . '/' . $archivo, null);
    }

    /**
     * Subir archivos
     */
    public function fileUpload($id, $categoria, $subcategoria)
    {
        if (isset($this->session->login)) {
            if (!empty($_FILES['file']['name'])) {
                $extension = (new SplFileInfo($_FILES['file']['name']))->getExtension();
                if ($extension == 'ppt' || $extension == 'pptx') {
                    $tipo = 'Presentacion';
                } else {
                    $tipo = 'Documento';
                }
                $nombre = $this->tildes($_FILES['file']['name']);
                if ($this->session->login->tipo_usuario == 1) {
                    $config['upload_path'] = 'home/files/' . $categoria . '/' . $subcategoria;
                    $estado = 1;
                } else {
                    $config['upload_path'] = 'home/files/' . $categoria . '/' . $subcategoria . '_temp';
                    $estado = 0;
                }
                $config['allowed_types'] = 'txt|pdf|doc|docx|ppt|pptx';
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
                        'ruta' => 'home/files/' . $categoria . '/' . $subcategoria,
                        'tamanio' => $_FILES['file']['size'],
                        'estado_archivo' => $estado,
                        'tipo_archivo' => $tipo,
                        'fecha' => date("Y-m-d H:i:s"),
                        'descargas' => 0,
                        'valoracion' => 0,
                        'icono' => 'home/images/archivos/' . $extension . '.png',
                        'id_usuario' => $this->session->login->id_usuario,
                        'id_subcategoria' => $id
                    ]);
                    // if ($this->session->login->tipo_usuario != 1) {
                    //     $this->solicitudModel->insert([
                    //         'descripcion' => 'Aprobar archivo',
                    //         'estado' => 1,
                    //         'fecha' =>  date("Y-m-d H:i:s"),
                    //         'id_tipo_solicitud' => 1,
                    //         'id_usuario' => $this->session->login->id_usuario
                    //     ]);
                    // }
                }
            }
        }
    }

    public function aprobar($id)
    {
        if (isset($this->session->login) && $this->session->login->tipo_usuario == 1) {
            $archivo = $this->archivoModel->getById($id);
            rename($archivo->ruta . '_temp/' . $archivo->archivo, $archivo->ruta . '/' . $archivo->archivo);
            $this->archivoModel->update(['estado_archivo' => 1], $id);
        }
    }

    public function cancelar($id)
    {
        if (isset($this->session->login) && $this->session->login->tipo_usuario == 1) {
            $archivo = $this->archivoModel->getById($id);
            if ($_POST['comentario'] != '') {
                // rename($archivo->ruta . '_temp/' . $archivo->archivo, $archivo->ruta . '/' . $archivo->archivo);
                $this->archivoModel->update(['estado_archivo' => 2, 'comentario_archivo' => $_POST['comentario']], $id);
                echo 1;
            } else {
                echo 0;
            }
        }
    }

    public function eliminar($id)
    {
        if (isset($this->session->login)) {
            $archivo = $this->archivoModel->getById($id);
            if ($archivo->estado == 1) {
                unlink($archivo->ruta . '/' . $archivo->archivo);
            } else {
                unlink($archivo->ruta . '_temp/' . $archivo->archivo);
            }
            $this->archivoModel->delete($id);
        }
    }
}
