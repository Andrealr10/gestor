<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomePage extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('categoriaModel');
	}

	public function index()
	{

		$this->load->view('homepage'); 
		
	}
}
