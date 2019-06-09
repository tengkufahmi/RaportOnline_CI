<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_Absensi extends CI_Model
{
    private $_table = "absensi";

    public $id_absen;
    public $no_induk;
    public $subuh;
    public $maghrib;   
    public $isyak;
    public $tanggal;
     public $thn_ajar;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function get_by_role()
  {
      $this->db->select('*');
      $this->db->join('siswa', 'siswa.no_induk = absensi.no_induk');
      $this->db->from('absensi');
      $query = $this->db->get();
      return $query->result();
  }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["no_induk" => $id])->row();
    }

    
}