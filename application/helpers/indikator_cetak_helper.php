<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_indikator') && ! function_exists('get_indikator_kopd') && ! function_exists('get_total_skor'))
{
    function get_indikator($variable_id = null)
    {
        if ($variable_id != null) {
            $ci =& get_instance();
            $ci->db->where('variable_id', $variable_id);
            $query = $ci->db->get('indikator');
            return $query->result_array();
        }
    }

    function get_indikator_kopd($indikator_id = null) 
    {
        if ($indikator_id != null) {
            $ci =& get_instance();
            $ci->db->select('total_indikator as skor');
            $ci->db->from('indikator_kopd');
            $ci->db->where('indikator_id', $indikator_id);
            $query = $ci->db->get();
            return $query->row_array();
        }
    }

    function get_skor_opd($opd_id = '', $tahun = '', $id_indikator = '')
    {
        if ($opd_id != '' && $tahun != '') {
            $ci =& get_instance();
            $ci->db->select('total_indikator as skor, opd_id, tahun, indikator_id');
            $ci->db->from('indikator_kopd');
            $ci->db->join('variable_kopd', 'indikator_kopd.variablekopd_id = variable_kopd.id');
            $ci->db->where('opd_id', $opd_id);
            $ci->db->where('tahun', $tahun);
            $ci->db->where('indikator_id', $id_indikator);
            return $ci->db->get()->row_array();
        }
    }

    function get_total_skor($opd_id = '', $tahun = '')
    {
        if ($opd_id != '' && $tahun != '') {
            $ci =& get_instance();
            $ci->db->select('SUM(total_indikator) as total_skor, opd_id, tahun');
            $ci->db->from('variable_kopd');
            $ci->db->join('indikator_kopd', 'variable_kopd.id = indikator_kopd.variablekopd_id');
            $ci->db->where('opd_id', $opd_id);
            $ci->db->where('tahun', $tahun);
            return $ci->db->get()->row_array();
        }
    }

    function get_status_kematangan($total)
    {
        if ($total > 10 && $total <= 19 ) {
            $tingkat_kematangan = "Sangat Rendah";
        } else if ($total > 19 && $total <= 28) {
            $tingkat_kematangan = "Rendah";
        } else if ($total > 28 && $total <= 37) {
            $tingkat_kematangan = "Sedang";
        } else if ($total > 37 && $total <= 46) {
            $tingkat_kematangan = "Tinggi";
        } else if ($total > 46 && $total <= 55) {
            $tingkat_kematangan = "Sangat Tinggi";
        } else {
            $tingkat_kematangan = '-';
        }
        return $tingkat_kematangan;
    }
}