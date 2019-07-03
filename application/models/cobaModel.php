<?php 

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class CobaModel extends CI_Model {


    function __construct()
    {
    	parent::__construct();
    }

    // function getDataEmiten(){
    // 	$this->db->select("*"); 
    // 	$this->db->from('emitem');
    // 	$query = $this->db->get();
    // 	return $query->result();
    // }
}
