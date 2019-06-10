<?php

class Nilai extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model("m_nilai");

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	function index(){
		$data["nilai"] = $this->m_nilai->get_by_role();
		$this->load->view('data-nilai', $data);
	}
}