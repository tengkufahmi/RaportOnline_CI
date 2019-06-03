<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_home extends CI_Model
{
    private $_table = "pengumuman";

    public $id_pengumuman;
    public $judul;
    public $isi;
    public $time;   

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_pengumuman" => $id])->row();
    }

    
}