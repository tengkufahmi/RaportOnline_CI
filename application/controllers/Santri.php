<?php

class Santri extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model("m_santri");	
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$data["santri"] = $this->m_santri->get_by_role();
		$this->load->view('data-santri', $data);
	}
}