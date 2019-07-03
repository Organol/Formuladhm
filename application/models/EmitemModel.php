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

    private function _get_datatables_query()
    {

        $this->db->from($this->table);

        $i = 0;

        foreach ($this->column_search as $item) // looping awal
        {
            if($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if($i===0) // looping awal
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if(count($this->column_search) - 1 == $i) 
                    $this->db->group_end(); 
            }
            $i++;
        }

        if(isset($_POST['order'])) 
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }


    public function getDetailEmiten($id){
        return $dataEmitem = $this->db->get_where('emitem', array('kode' => $id))->result();
    }

    public function getDataQ1($where){
     return $this->db->get_where('q1', array('kode' => $where))->result();
    }
     public function getDataQ2($where){
         return $this->db->get_where('q2', array('kode' => $where))->result();
     }
     public function getDataQ3($where){
         return $this->db->get_where('q3', array('kode' => $where))->result();
     }
     public function getDataTahunan($where){
         return $this->db->get_where('tahunan', array('kode' => $where))->result();
     }

     public function getDataTanggal($where,$start,$end){
        $date = array($start, $end);
        $this->db->select("*");
        $this->db->from('datasaham');
        $this->db->where_in('tanggal',$date);
        $this->db->where('kode',$where);
        $query = $this->db->get();
        return $query->result();
    }

    public function getDataSaham($where){
     return $this->db->get_where('datasaham', array('kode' => $where))->result();
    }

    public function getDataSahamToday($where,$date){
        $this->db->select("*");
        $this->db->from('datasaham');
        $this->db->where('tanggal',$date);
        $this->db->where('kode',$where);
        $query = $this->db->get();
        return $query->result();
    }

    public function getDataSahamBeredar($kode,$where){
        $this->db->select('dataemiten.saham_beredar,datasaham.nilai_saham');
        $this->db->from('datasaham');
        $this->db->join('dataemiten','dataemiten.kode=datasaham.kode');
        $this->db->where('datasaham.tanggal',$where);
        $this->db->where('datasaham.kode',$kode);
        $query=$this->db->get();
        return $query->result_array();
    }
    public function getDataNeraca($where){
     return $this->db->get_where('neraca', array('kode' => $where))->result();
    }

     public function getDataSelisih($start,$end){
        $date = array($start, $end);
        $this->db->select("*");
        $this->db->from('datasaham');
        $this->db->join('emitem','emitem.kode=datasaham.kode');
        $this->db->where_in('tanggal',$date);
        $query = $this->db->get();
        return $query->result();
        print_r($date);
    }
    

}



