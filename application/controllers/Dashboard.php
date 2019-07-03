<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		// $this->load->model('EmitenModel');


	}

	public function index()
	{
		$data['dataEmiten']= $this->cobaModel->getDataEmiten();
		$this->load->view('Saham/DetailEmitenView');
	}

	public function FormInput()
	{
		$this->load->view('Saham/FormInputView');
	}

	public function DetailView(){
		$id=$this->uri->segment(3);
		$data['detail']= $this->EmitenModel->getDetailEmiten($kode);
		$this->load->view('Saham/DashboardView',$data);
	}
}
