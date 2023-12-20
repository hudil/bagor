<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    protected $table = 'indikator_kopd';
    protected $join = 'variable_kopd';
    protected $where = 'opd_id';
    protected $where2 = 'tahun';

    public function getnilai($opd_id, $tahun)
    {
        $this->db->select('SUM(total_indikator) as total');
        $this->db->from($this->table);
        $this->db->join($this->join, $this->join . '.id = '. $this->table .'.variablekopd_id');
        $this->db->where($this->where, $opd_id);
        $this->db->where($this->where2, $tahun);
        return $this->db->get()->result_array();
    }

}