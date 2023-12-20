<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Opd_model extends CI_Model {
    
    protected $table = 'opd';
    protected $where = 'id';

	public function get()
    {
        return $this->db->get($this->table)->result_array();
    }

    public function getbyid($id)
    {
        $this->db->where($this->where, $id);
        return $this->db->get($this->table)->row_array();
    }

    public function get_all()
    {
        $this->db->where('opd !=', 'Sekretariat Daerah (Bagian Organisasi)');
        return $this->db->get($this->table)->result_array();
    }

}
