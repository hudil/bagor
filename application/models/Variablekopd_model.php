<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Variablekopd_model extends CI_Model {

    protected $table = 'variable_kopd';
    protected $join = 'variable';
    protected $where = 'id';
    protected $whereopd = 'opd_id';

    public function get()
    {
        return $this->db->get($this->table)->result_array();
    }

    public function getbyopdid($opd_id)
    {
        $this->db->select('variable_kopd.id as id, variable_id, tahun, variable, file_upload, is_verify, is_input, is_edit, catatan');
        $this->db->from($this->table);
        $this->db->join($this->join, $this->join . '.id = ' . $this->table . '.variable_id');
        $this->db->where($this->whereopd, $opd_id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getbytahunopdid($tahun, $opd_id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join($this->join, $this->join . '.id = ' . $this->table . '.variable_id');
        $this->db->where('tahun', $tahun);
        $this->db->where('opd_id', $opd_id);
        $this->db->get()->result_array();
    }

    public function getopdid($varkopd_id)
    {
        $this->db->select('opd_id');
        $this->db->from($this->table);
        $this->db->where($this->where, $varkopd_id);
        return $this->db->get()->row_array();
    }

    public function getby($var_id, $opd_id)
    {
        $this->db->where('variable_id', $var_id);
        $this->db->where('opd_id', $opd_id);
        return $this->db->get($this->table)->row_array();
    }

    public function find($varkopd_id)
    {
        $this->db->where($this->where, $varkopd_id);
        return $this->db->get($this->table)->row_array();
    }

    public function update($data, $id)
    {
        $this->db->where($this->where, $id);
        $this->db->update($this->table, $data);
    }

    public function total_skor($tahun)
    {
        $this->db->select('SUM(total_indikator) as total, tahun');
        $this->db->from('variable_kopd');
        $this->db->join('indikator_kopd', 'variable_kopd.id = indikator_kopd.variablekopd_id');
        $this->db->where('tahun', $tahun);
        return $this->db->get()->row_array();
    }

}