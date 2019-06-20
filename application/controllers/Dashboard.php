<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
	}
	public function index()
	{
		// $this->load->view('Saham/header');
		$this->load->view('Saham/Dashboard');
	}

	public function inputan()
	{
		$this->load->view('Saham/input');
	}
}
