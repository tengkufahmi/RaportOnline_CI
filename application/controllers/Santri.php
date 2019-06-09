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
		$data["kelas"] = $this->m_santri->getKelas();
		$this->load->view('data-santri', $data);
	}

	function getDataKelas(){
		$id = $_GET['kelas'];
		$data["santri"] = $this->m_santri->get_by_class($id);
		$this->load->view('table-santri', $data);
	}

	
}