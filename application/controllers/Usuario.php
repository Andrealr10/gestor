<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('MainModel');
    }

	public function index()
	{
        $data=['usuarios'=>$this->MainModel->getAll('usuario')];
        //renderizamos la vista
        $this->load->view('pages/index',$data);

	}
}
