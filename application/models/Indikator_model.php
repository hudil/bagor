<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indikator_model extends CI_Model {

    protected $table = 'indikator';
    protected $join = 'variable';
    protected $where = 'variable_id';

    public function gettoform($varkopd_id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join($this->join, $this->join . '.id = ' . $this->table . '.variable_id');
        $this->db->where($this->where, $varkopd_id);
        return $this->db->get()->result_array();
    }

    public function wherevarid($varid) 
    {
        $this->db->where($this->where, $varid);
        return $this->db->get($this->table)->result_array();
    }

    public function getid($var_id, $skor)
    {
        $this->db->select('id');
        $this->db->from($this->table);
        $this->db->where('variable_id', $var_id);
        $this->db->where('skor', $skor);
        return $this->db->get()->row_array();
    }

    public function getindiopd()
    {
        
    }

}