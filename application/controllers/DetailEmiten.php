<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class DetailEmiten extends CI_Controller {
 
    function __construct(){
        parent::__construct();
        $this->load->model('EmitemModel');
    }
 
    function index(){
        $this->load->view('Saham/DetailEmitenView');
    }
 
    function get_data_saham()
    {
        $list = $this->EmitemModel->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->kode;
            $row[] = $field->nama;
            $row[] = $field->sektor;
            $row[] = $field->nama;
            $row[] = '<a class="btn btn-info btn-block btn-sm" href="index.php/Dashboard/DetailView/'.$field->kode.'">Details</a>';
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->EmitemModel->count_all(),
            "recordsFiltered" => $this->EmitemModel->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
 
}