<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Archivo2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('pages/archivos/index2');
    }

    public function fileUpload()
    {
        if (!empty($_FILES['file']['name'])) {

            // Set preference
            $config['upload_path'] = 'home/files/';
            $config['allowed_types'] = 'pdf';
            $config['max_size']    = '10240'; // max_size in kb
            $config['file_name'] = $_FILES['file']['name'];

            //Load upload library
            $this->load->library('upload', $config);

            // File upload
            if ($this->upload->do_upload('file')) {
                // Get data about the file
                $uploadData = $this->upload->data();
            }
        }
    }

}