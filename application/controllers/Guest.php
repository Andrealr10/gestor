<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guest extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('categoriaModel');
    }
    public function index(){
        $data = ['categorias' => $this->categoriaModel->getAll()];
        // $this->load->view('pages/guest/nav.php');
        $this->load->view('pages/guest/index.php',$data);
    }
}