<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subkegiatan_model extends CI_Model {

    protected $table = 'mst_sub_kegiatan';
    protected $where = 'id_subkeg';

    public function get()
    {
        $this->db->order_by($this->where, "asc");
        return $this->db->get($this->table)->result_array();
    }

    public function get_byId($id)
    {
        return $this->db->get_where($this->table, [$this->where => $id])->row_array();
    }

	public function insert($data) 
    {
        $this->db->insert($this->table, $data);
        return $this->db->affected_rows();
    }

    public function update($id, $data) 
    {
        $this->db->where($this->where, $id);
        $this->db->update($this->table, $data);
        return $this->db->affected_rows();
    }

    public function delete($id)
    {
        $this->db->delete($this->table, array($this->where => $id));
        return $this->db->affected_rows();
    }
}
