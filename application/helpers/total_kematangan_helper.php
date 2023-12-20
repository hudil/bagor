<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('total_indikator'))
{
    function total_indikator($id = '')
    {
        $ci =& get_instance();
        $ci->db->select('SUM(total_indikator) as total');
        $ci->db->from('indikator_kopd');
        $ci->db->where('variablekopd_id', $id);
        $total = $ci->db->get()->row_array();
        return $total;
    }   
}