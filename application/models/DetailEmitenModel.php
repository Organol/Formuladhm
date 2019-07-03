<?php

class EmitemModel extends CI_Model {

    var $table = 'emitem'; //nama tabel dari database
    var $column_order = array(null, 'kode','nama','sektor'); //field yang ada di table user
    var $column_search = array('kode','nama','sektor'); //field yang diizin untuk pencarian 
    var $order = array('kode' => 'asc'); // default order 

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getDetailEmiten($kode){
        $this->db->select("*"); 
        $this->db->from('emitem');
        $this->db->where('kode=',$kode);
        $query = $this->db->get();
        return $query->result();
    }

}