<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		$this->load->view('Saham/Dashboard');
	}
	public function DataEmiten()
	{
		$this->load->view('Saham/DataEmitenView');
	}

	public function DetailEmiten()
	{
		$this->load->view('Saham/DetailEmitenView');
	}

}
