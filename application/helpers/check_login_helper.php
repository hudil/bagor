<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('is_login'))
{
    function is_login()
    {
        $ci =& get_instance();
        if ( ! $ci->session->userdata('name') && ! $ci->session->userdata('opd_id')) {
            redirect('auth');
        }
    }

    function getopd($id)
    {
        $ci =& get_instance();
        $ci->db->where('id', $id);
        return $ci->db->get('opd')->row_array();
    }

    function getketlogin($opd_id, $role_id)
    {
        $ci =& get_instance();
        $ci->db->select('role, opd, opd_id, role_id');
        $ci->db->from('users');
        $ci->db->join('role', 'role.id = users.role_id');
        $ci->db->join('opd', 'opd.id = users.opd_id');
        $ci->db->where('opd_id', $opd_id);
        $ci->db->where('role_id', $role_id);
        return $ci->db->get()->row_array();
    }
}