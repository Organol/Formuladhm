<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emiten extends CI_Controller {

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

            $row[] = '<a class="btn btn-info btn-block btn-sm" href="index.php/Emiten/DetailView/'.$field->kode.'">Details</a>';
            
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

    public function FormInput()
    {
        $this->load->view('Saham/FormInputView');
    }

    public function DetailView(){
        $id=$this->uri->segment(3);
        $data['detail']= $this->EmitemModel->getDetailEmiten($id);
        $this->load->view('Saham/DashboardView',$data);
    }

    public function getDataQ1(){
       $kode = $this->input->post('kode');
       $dataq1 = $this->EmitemModel->getDataq1($kode);
       echo json_encode($dataq1);
   }
   public function getDataQ2(){
       $kode = $this->input->post('kode');
       $dataq2 = $this->EmitemModel->getDataq2($kode);
       echo json_encode($dataq2);
   }
   public function getDataQ3(){
       $kode = $this->input->post('kode');
       $dataq3 = $this->EmitemModel->getDataq3($kode);
       echo json_encode($dataq3);
   }
   public function getDataTahunan(){
       $kode = $this->input->post('kode');
       $dataTahunan = $this->EmitemModel->getDataTahunan($kode);
       echo json_encode($dataTahunan);
   }
   public function getDataSaham(){
       $kode = $this->input->post('kode');
       $dataSaham = $this->EmitemModel->getDataSaham($kode);
       echo json_encode($dataSaham);
   }

   public function filterTgl(){
       $kode = $this->input->post('kodeEmiten');
       $start_date = $this->input->post('start_date');
       $end_date = $this->input->post('end_date');
       $dataTanggal = $this->EmitemModel->getDataTanggal($kode,$start_date,$end_date);
       echo json_encode($dataTanggal);
   }

   public function getSahamToday(){
       $kode = $this->input->post('kodeEmiten');
       $today = $this->input->post('dateString');
       $dataSahamToday = $this->EmitemModel->getDataSahamToday($kode,$today);
       echo json_encode($dataSahamToday);
   }

     public function getSahamBeredar(){
       $kode = $this->input->post('kodeEmiten');
       $today = $this->input->post('dateString');
       $dataSahamBeredar = $this->EmitemModel->getDataSahamBeredar($kode,$today);
       echo json_encode($dataSahamBeredar);
   }
    public function getDataNeraca(){
       $kode = $this->input->post('kode');
       $dataNeraca = $this->EmitemModel->getDataNeraca($kode);
       echo json_encode($dataNeraca);
   }
   public function getSelisih(){
       $to_date = $this->input->post('to_date');
       $from_date = $this->input->post('from_date');
       $dataSelisih = $this->EmitemModel->getDataSelisih($to_date,$from_date);
       echo json_encode($dataSelisih);
   }


}