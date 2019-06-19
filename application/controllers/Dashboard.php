<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('shmodel');
	}
	public function index()
	{
		// $this->load->view('Saham/header');
		$this->load->view('Saham/Dashboard');
	}

	public function inputData()
	{
		$data = array();

		if($upload['result'] == "sukses"){ 

				include APPPATH.'third_party/PHPExcel/PHPExcel.php';
				
				$excelreader = new PHPExcel_Reader_Excel2007();
				$loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); 
				$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
				
				$data['sheet'] = $sheet; 
			}else{ //error
				$data['upload_error'] = $upload['error']; 
			}
	}
}
