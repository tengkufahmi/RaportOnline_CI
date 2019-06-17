<?php

class Absensi extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model("m_absensi");	
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$data["absensi"] = $this->m_absensi->get_by_role();
		$this->load->view('data-absensi', $data);
	}

	public function delete($id=null)
	{
		if (!isset($id)) show_404();

		if ($this->m_absensi->delete($id)) {
			redirect(site_url('Absensi'));
		}
    }
}