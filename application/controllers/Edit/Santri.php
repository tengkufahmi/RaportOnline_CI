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
		$this->load->view('edit/santri');
	}

	public function edit($id){
		$where = array('no_induk' => $id);
		$data['santri'] = $this->m_santri->edit_data($where,'siswa')->result();
		$this->load->view('edit/santri',$data);
	}

	public function update(){
		$post = $this->input->post();
		$id = $post["id"];
		$nama = $post["nama"];
		$tanggal = $post["tgl"];
		$nomor = $post["nomor"];
		$email = $post["email"];

		$data = array(
			'nama_guru' => $nama,
			'tgl_lahir_guru' => $tanggal,
			'no_hp_guru' => $nomor,
			'email_guru' => $email
		);

		$where = array(
			'id_guru' => $id
		);

		$this->m_guru->update_data($where, $data, 'guru');
		redirect('Guru');
	}
}