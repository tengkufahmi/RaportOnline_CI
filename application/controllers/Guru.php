<?php

class Guru extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model("m_guru");
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$data["guru"] = $this->m_guru->getAll();
		$this->load->view('data-guru', $data);
	}
}