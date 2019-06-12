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
<<<<<<< HEAD
		$data["kelas"] = $this->m_nilai->getKelas();
		$data["mapel"] = $this->m_nilai->getMapel();
		$this->load->view('data-nilai', $data);
	}

	function getInfo(){
		$kelas = $this->input->get('kelas');
		$semester = $this->input->get('semester');
		$mapel = $this->input->get('mapel');
		//$package = [$kelas, $semester, $mapel];
		$hasil["nilai"] = $this->m_nilai->get_by_class($mapel);
		var_dump($hasil); die;
		$this->load->view('table-nilai', $hasil);
=======
		$this->load->view('data-nilai', $data);
>>>>>>> 42b7a5660c19e161d381318757995657984f2960
	}
}