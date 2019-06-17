<?php

class User extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model("m_user");
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$this->load->view('edit-user');
	}

	public function edit($id){
		$where = array('id_user' => $id);
		$data['user'] = $this->m_user->edit_data($where,'user')->result();
		$this->load->view('edit/user',$data);
	}

	public function update(){
		$post = $this->input->post();
		$id = $post["id"];
		$password = $post["password"];		

		$data = array(
			'password' => $password
		);

		$where = array(
			'id_user' => $id
		);

		$this->m_user->update_data($where, $data, 'user');
		redirect('User');
	}
}