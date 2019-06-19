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

	public function inputData(){
		if (isset($_POST['preview'])){
			$upload = $this->shmodel->upload_file($this->filename);

			if ($upload['result']=="sukses") {
				include APPATH.'third_party/PHPExcel/PHPExcel.php';

				$excelreader = new PHPExcel_Reader_Excel2007();

				$loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx');
				$sheet=$loadexcel->getActiveDheet()->toArray(null, true, true, true);
				$data['sheet']=$sheet;
			}else{
				$data['upload_error']=$upload['error'];
			}
		}
		$this->load->view('Saham/input', $data);


	}
}
