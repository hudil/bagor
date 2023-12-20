<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kematangan_model extends CI_Model {

    protected $table = 'variable_kopd';
    protected $table_join = 'opd';
    protected $table_join2 = 'variable';
    protected $table_join3 = 'indikator_kopd';
    protected $where = 'opd_id';
    protected $order_by = 'tahun';
    protected $order_by2 = 'variable_id';
    protected $table_indikator = 'indikator';

    public function get($opd_id)
    {
        $this->db->select('variable_kopd.id as id, tahun, opd_id, opd, variable_id, variable, is_verify, is_input, is_edit');
        $this->db->from($this->table);
        $this->db->join($this->table_join, $this->table_join . '.id = '. $this->table .'.opd_id');
        $this->db->join($this->table_join2, $this->table_join2 . '.id = '. $this->table .'.variable_id');
        $this->db->where($this->where, $opd_id);
        $this->db->order_by($this->order_by, 'DESC'); 
        $this->db->order_by($this->order_by2, 'ASC'); 
        $query = $this->db->get();
        return $query->result_array();
    }

    public function form_input($var_id)
    {
        $this->db->where('variable_id', $var_id);
        return $this->db->get($this->table_indikator)->result_array();
    }

    public function get_var($var_id)
    {
        $this->db->where('id', $var_id);
        return $this->db->get($this->table_join2)->row_array();
    }

    public function insert_indikator($data)
    {
        $this->db->insert($this->table_indikator, $data);
    }

    public function get_opd($opd_id)
    {
        $this->db->where('id', $opd_id);
        return $this->db->get('opd')->row_array();
    }

    public function insert_indikator_kopd($data) 
    {
        $this->db->insert('indikator_kopd', $data);
    }

    public function update_input($data, $opd_id, $var_id)
    {
        $this->db->where('opd_id', $opd_id);
        $this->db->where('variable_id', $var_id);
        $this->db->update('variable_kopd', $data);
    }

    public function update_indikator_kopd($data, $varkopd_id)
    {
        $this->db->where('variablekopd_id', $varkopd_id);
        $this->db->update('indikator_kopd', $data);
    }
}