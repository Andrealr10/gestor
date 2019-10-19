<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Grafica extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('usuarioModel');
    }

    public function index()
    {
        
        $this->load->view('pages/utils/grafica');
    }

    public function top()
    {
        $datos = $this->usuarioModel->top();
        $data = array();
        foreach ($datos as $row) {
            $data[] = $row;
        }
        echo json_encode($data);
    }
}
