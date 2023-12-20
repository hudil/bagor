<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SOP_model extends CI_Model {

    public function getmodule()
    {
        return $this->db->get('modules')->result_array();
    }

    public function getsop()
    {
        return $this->db->get('sop')->result_array();
    }

    public function get_where($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('sop')->row_array();
    }

    public function insert($data)
    {
        $this->db->insert('sop', $data);
    }

    public function list_sop($id_module)
    {
        $this->db->where('module_id', $id_module);
        return $this->db->get('sop')->row_array();
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('sop');
    }
    
}