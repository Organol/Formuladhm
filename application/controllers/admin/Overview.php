<?php

/**
 * 
 */
class Overview extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	function index()
	{
		$this->load->View("admin/overview");
	}
}