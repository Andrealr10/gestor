<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categoria extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('MainModel');
    }

	public function index()
	{
        $data=['categorias'=>$this->MainModel->getAll('categoria')];
        //renderizamos la vista
        $this->load->view('pages/categoria',$data);

	}
}
