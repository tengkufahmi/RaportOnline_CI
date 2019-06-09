<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_Nilai extends CI_Model
{
    private $_table = "nilai";

    public $id_nilai;
    public $id_guru;
    public $no_induk;
    public $kd_mapel;   
    public $nilai;
    public $semester;
    public $thn_ajar;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function get_by_role()
  {
      $this->db->select('*');
      $this->db->from('nilai');
      $this->db->join('mapel', 'mapel.KD_MAPEL = nilai.KD_MAPEL');
      $this->db->join('guru', 'guru.id_guru = nilai.id_guru');
      $this->db->join('siswa', 'siswa.no_induk = nilai.no_induk');
      $query = $this->db->get();
      return $query->result();
  }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["no_induk" => $id])->row();
    }

    
}