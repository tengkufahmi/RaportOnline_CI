<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_Santri extends CI_Model
{
  
  public function getAll()
  {
    return $this->db->get($this->_table)->result();
  }

  public function get_by_role()
  {
    $this->db->select('*');
    $this->db->from('siswa');
    $this->db->join('orang_tua', 'orang_tua.ID_ORTU = siswa.ID_ORTU');
    $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
    $this->db->join('user', 'user.id_user = siswa.id_user');
    $this->db->join('guru', 'guru.id_guru = siswa.id_guru');
    $query = $this->db->get();
    return $query->result();
  }

  public function getById($id)
  {
    return $this->db->get_where($this->_table, ["id_kelas" => $id])->result();
  }

  public function get_by_class($id)
  {
    $this->db->select('*');
    $this->db->from('siswa');
    $this->db->join('orang_tua', 'orang_tua.ID_ORTU = siswa.ID_ORTU');
    $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
    $this->db->join('user', 'user.id_user = siswa.id_user');
    $this->db->join('guru', 'guru.id_guru = siswa.id_guru');
    $query = $this->db->where('kelas.id_kelas ='.$id)->get();
    return $query->result();
   
  }

  public function getKelas()
  {
    $this->db->select('*');
    $this->db->from('kelas');
    $query = $this->db->get();
    return $query->result();
  }


}