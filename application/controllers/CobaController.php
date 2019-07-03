<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('cobaModel');

	}


	public function index()
	{
		// $data['dataEmiten']= $this->Logbook_model->getDetailLogbook($id);
		$data['dataEmiten']= $this->cobaModel->getDataEmiten();
		$this->load->view('Saham/DetailEmitenView',$data);

		// $this->load->view('Saham/DashboardView');
	}

}
