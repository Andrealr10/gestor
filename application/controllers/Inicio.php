<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inicio extends CI_Controller
{

	public function index()
	{
		$this->load->view('pages/index');

	}
}
