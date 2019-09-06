<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		// $this->load->library('javascript'); esto ya no tiene soporte
		// $this->load->helper('url'); // Se utiliza un helper para manejo de url
		$this->load->view('includes/navUser'); // Menu
		$this->load->view('home'); 
		$this->load->view('includes/foot');
	}
}
