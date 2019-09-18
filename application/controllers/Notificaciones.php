<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notificaciones extends CI_Controller {

	public function index()
	{
		$this->load->view('pages/admin/home/index.php'); // Menu
	    $this->load->view('pages/admin/notificaciones/index.php');
	}
}
