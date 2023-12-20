<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indikatorkopd_model extends CI_Model {

    protected $table = 'indikator_kopd';
    protected $join = 'indikator';
    protected $join2 = 'variable_kopd';
    protected $where = 'id';
    protected $wherevarkopd = 'variablekopd_id';

    public function getbyvkopdid($vkopdid)
    {
        $this->db->select('indikator_kopd.id as id, total_indikator, field, indikator, opd_id');
        $this->db->from($this->table);
        $this->db->join($this->join, $this->join . '.id = ' . $this->table . '.indikator_id');
        $this->db->join($this->join2, $this->join2 . '.id = ' . $this->table . '.variablekopd_id');
        $this->db->where($this->wherevarkopd, $vkopdid);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getskor($varkopdid)
    {
        $this->db->select('total_indikator as skor');
        $this->db->from($this->table);
        $this->db->where($this->wherevarkopd, $varkopdid);
        return $this->db->get()->row_array();
    }

    public function getformedit($varkopdid)
    {
        $this->db->where($this->wherevarkopd, $varkopdid);
        return $this->db->get($this->table)->row_array();
    }

    public function update($data, $id)
    {
        $this->db->where('variablekopd_id', $id);
        $this->db->update($this->table, $data);
    }

}
