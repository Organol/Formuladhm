<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		// $this->load->model('excel_import_model');
  // 		$this->load->library('excel');
	}
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

	public function FormInput()
	{
		$this->load->view('Saham/FormInputView');
	}
	public function InputEmiten()
	{
		  if(isset($_FILES["file"]["name"]))
		  {
		   $path = $_FILES["file"]["tmp_name"];
		   $object = PHPExcel_IOFactory::load($path);
		   foreach($object->getWorksheetIterator() as $worksheet)
		   {
		    $highestRow = $worksheet->getHighestRow();
		    $highestColumn = $worksheet->getHighestColumn();
		    for($row=2; $row<=$highestRow; $row++)
		    {
		     $kode = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
		     $nama = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
		     $sektor = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
		     // $postal_code = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
		     // $country = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
		     $data[] = array(
		      'kode'  => $kode,
		      'nama'   => $nama,
		      'sektor'    => $sektor,
		      // 'PostalCode'  => $postal_code,
		      // 'Country'   => $country
		     );
		    }
		   }
		   $this->excel_import_model->insert($data);
		   echo 'Data Imported successfully';
		  }
		}
	}
	
?>