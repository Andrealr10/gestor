<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Clase controladora para generar los archivos .zip de las carpetas
 */
class Zip extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('archivoModel');
        $this->load->library('zip');
    }

    /**
     * Metodo que se encarga de generar el .zip y descargaralo
     */
    private function build_and_download($filename)
    {
        $this->zip->archive(FCPATH.'/home/zip/'.$filename);
        $this->zip->download($filename);
    }

    /**
     * Funcion para agregar toda la carpeta al .zip
     */
    public function dir($categoria, $subcategoria)
    {
        $this->zip->read_dir(FCPATH.'home/files/'.$categoria.'/'.$subcategoria.'/',FALSE);
        $this->build_and_download($subcategoria.'_'.$categoria.'.zip');
    }


    public function index()
    {
        // $this->dir();
    }
}