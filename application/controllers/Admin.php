<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('pages/admin/inicio/navbar.php'); // Menu
		// $this->load->view('home'); 
		// $this->load->view('includes/foot');
	}
}
