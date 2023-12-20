<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Variable_model extends CI_Model {

    protected $table = 'variable';
    protected $where = 'id';

    public function get()
    {
        return $this->db->get($this->table)->result_array();
    }

    public function getbyid($id)
    {
        return $this->db->get_where($this->table, [$this->where => $id])->row_array();
    }

}