<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model
{

  public function getAll()
  {
    $this->db->select('*');
    $this->db->from('user');
    $query = $this->db->get();
    return $query->result();
  }


}