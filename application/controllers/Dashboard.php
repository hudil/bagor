<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_model');
        is_login();
    }

    public function index()
    {
        $opd_id = $this->session->userdata('opd_id');
        $tahun = date('Y');
        // $tahun = 2022;
        $total_kematangan = $this->Dashboard_model->getnilai($opd_id, $tahun)[0]['total'];
        $data['total_nilai'] = $total_kematangan;
        if ($total_kematangan > 10 && $total_kematangan <= 19 ) {
            $tingkat_kematangan = "Sangat Rendah";
        } else if ($total_kematangan > 19 && $total_kematangan <= 28) {
            $tingkat_kematangan = "Rendah";
        } else if ($total_kematangan > 28 && $total_kematangan <= 37) {
            $tingkat_kematangan = "Sedang";
        } else if ($total_kematangan > 37 && $total_kematangan <= 46) {
            $tingkat_kematangan = "Tinggi";
        } else if ($total_kematangan > 46 && $total_kematangan <= 55) {
            $tingkat_kematangan = "Sangat Tinggi";
        } else {
            $tingkat_kematangan = '-';
        }
        
        $data['tingkat_kematangan'] = $tingkat_kematangan;

        $this->load->view('app/partials/header');
        $this->load->view('app/partials/topbar');
        $this->load->view('app/partials/sidebar');
        $this->load->view('app/dashboard/index', $data);
        $this->load->view('app/partials/footer');
    }

    public function getdata()
    {
        $opd_id = $this->session->userdata('opd_id');
        $tahun = $this->input->post('tahun');

        $total_kematangan = $this->Dashboard_model->getnilai($opd_id, $tahun)[0]['total'];
        $data['total_nilai'] = $total_kematangan;
        if ($total_kematangan > 10 && $total_kematangan <= 19 ) {
            $tingkat_kematangan = "Sangat Rendah";
        } else if ($total_kematangan > 19 && $total_kematangan <= 28) {
            $tingkat_kematangan = "Rendah";
        } else if ($total_kematangan > 28 && $total_kematangan <= 37) {
            $tingkat_kematangan = "Sedang";
        } else if ($total_kematangan > 37 && $total_kematangan <= 46) {
            $tingkat_kematangan = "Tinggi";
        } else if ($total_kematangan > 46 && $total_kematangan <= 55) {
            $tingkat_kematangan = "Sangat Tinggi";
        } else {
            $tingkat_kematangan = '-';
        }
        
        $data['tingkat_kematangan'] = $tingkat_kematangan;

        echo json_encode($data);
    }

}