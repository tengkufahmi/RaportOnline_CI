<?php

class Mapel extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model("m_mapel");

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$this->load->view('Edit/mapel');
	}	

	public function edit($id){
		$where = array('kd_mapel' => $id);
		$data['mapel'] = $this->m_mapel->edit_data($where,'mapel')->result();
		$this->load->view('Edit/mapel',$data);
	}

	public function update(){
		$post = $this->input->post();
		$id = $post["id"];
		$kode = $post["kode"];
		$mapel = $post["mapel"];		

		$data = array(
			'kd_mapel' => $kode,
			'mapel' => $mapel
		);

		$where = array(
			'kd_mapel' => $id
		);

		$this->m_mapel->update_data($where, $data, 'mapel');
		redirect('Mapel');
	}
}