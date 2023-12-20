<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardverif extends CI_Controller {

    public function index()
    {
        $data['opd'] = "";
        $data['total'] = "";
        $data['tingkat_kematangan'] = "";
        $data['total_keseluruhan'] = 0;

        $this->db->where('opd !=', 'Sekretariat Daerah (Bagian Organisasi)');
        $opd = $this->db->get('opd')->result_array();

        $tahun = date('Y');

        foreach($opd as $op) {
            $pd = $op['singkatan'];
            $data['opd'] .= "'$pd'" . ", ";

            $this->db->select('SUM(total_indikator) AS total, opd_id');
            $this->db->from('variable_kopd vk');
            $this->db->join('indikator_kopd ik', 'vk.id = ik.variablekopd_id');
            $this->db->where('tahun', $tahun);
            $this->db->where('opd_id', $op['id']);
            $total = $this->db->get()->row_array();

            if ($op['id'] == $total['opd_id']) {
                $nilai = $total['total'];
            } else {
                $nilai = 0;
            }

            $data['total'] .= $nilai . ", ";
            $data['total_keseluruhan'] += $nilai;

        }

        $data['total_keseluruhan'] = number_format($data['total_keseluruhan'] / count($opd), 2);

        if ($data['total_keseluruhan'] >= 10 && $data['total_keseluruhan'] < 20) {
            $data['tingkat_kematangan'] = "Sangat Rendah";
        } else if ($data['total_keseluruhan'] > 19 && $data['total_keseluruhan'] < 29) {
            $data['tingkat_kematangan'] = "Rendah";
        } else if ($data['total_keseluruhan'] > 28 && $data['total_keseluruhan'] < 38) {
            $data['tingkat_kematangan'] = "Sedang";
        } else if ($data['total_keseluruhan'] > 37 && $data['total_keseluruhan'] < 47) {
            $data['tingkat_kematangan'] = "Tinggi";
        } else if ($data['total_keseluruhan'] > 46 && $data['total_keseluruhan'] < 56) {
            $data['tingkat_kematangan'] = "Sangat Tinggi";
        } else {
            $data['tingkat_kematangan'] = "-";
        }

        $this->load->view('app/partials/header');
        $this->load->view('app/partials/topbar');
        $this->load->view('app/partials/sidebar');
        $this->load->view('app/dashboard/verif', $data);
        $this->load->view('app/partials/footer', $data);
    }

    public function getdata()
    {

        $data['opd'] = "";
        $data['total'] = "";
        $data['total_keseluruhan'] = 0;

        $this->db->where('opd !=', 'Sekretariat Daerah (Bagian Organisasi)');
        $opd = $this->db->get('opd')->result_array();

        $tahun = $this->input->post('tahun');

        foreach($opd as $op) {
            $pd = $op['singkatan'];
            $data['opd'] .= "'$pd'" . ", ";

            $this->db->select('SUM(total_indikator) AS total, opd_id');
            $this->db->from('variable_kopd vk');
            $this->db->join('indikator_kopd ik', 'vk.id = ik.variablekopd_id');
            $this->db->where('tahun', $tahun);
            $this->db->where('opd_id', $op['id']);
            $total = $this->db->get()->row_array();

            if ($op['id'] == $total['opd_id']) {
                $nilai = $total['total'];
            } else {
                $nilai = 0;
            }

            $data['total'] .= $nilai . ",";
            $data['total_keseluruhan'] += $nilai;
        }

        $data['total_keseluruhan'] = number_format($data['total_keseluruhan'] / count($opd), 2);

        echo json_encode($data);
    }

}


?>