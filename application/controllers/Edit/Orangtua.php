<?php

class Orangtua extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model("m_orangtua");	
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		
		$this->load->view('Edit/orangtua');
	}
	
	public function edit($id){
		$where = array('id_ortu' => $id);
		$data['orangtua'] = $this->m_orangtua->edit_data($where,'orang_tua')->result();
		$this->load->view('edit/orangtua',$data);
	}

	public function update(){
		$post = $this->input->post();
		$id = $post["id"];
		$ayah = $post["ayah"];
		$wali = $post["wali"];
		$ibu = $post["ibu"];
		$hp = $post["hp"];

		$data = array(
			'nama_ayah' => $ayah,
			'nama_ibu' => $ibu,
			'nama_wali' => $wali,
			'no_hp_ortu' => $hp
		);

		$where = array(
			'id_ortu' => $id
		);

		$this->m_orangtua->update_data($where, $data, 'orang_tua');
		redirect('Orangtua');
	}
}