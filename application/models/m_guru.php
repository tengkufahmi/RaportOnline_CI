<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_guru extends CI_Model
{

  public function getAll()
  {
    $this->db->select('*');
    $this->db->from('guru');
    $query = $this->db->get();
    return $query->result();
  }

  public function save()
	{
		$post = $this->input->post();
		$this->nama_guru = $post["nama"];
		$this->tgl_lahir_guru = $post["tgl"];
		$this->no_hp_guru = $post["nomor"];
		$this->email_guru = $post["email"];
		$this->db->insert('guru', $this);
	}


}