<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Variablekopd extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Opd_model');
        $this->load->model('Variable_model');
    }

    public function index()
    {
        $this->load->view('app/partials/header');
		$this->load->view('app/partials/topbar');
		$this->load->view('app/partials/sidebar');
		$this->load->view('app/verifikator/generatekopd');
		$this->load->view('app/partials/footer');
    }

    public function pros()
    {
        $insert_variablekopd = [];
        //ambil tahun
        $tahun = htmlspecialchars($this->input->post('tahun'));

        $opd = $this->Opd_model->get();

        $variable = $this->Variable_model->get();

        for ($i = 0; $i < count($opd) - 1; $i++) {
            for ($j = 0; $j < count($variable); $j++) {
                $variablekopd = [
                    'tahun' => $tahun,
                    'opd_id' => $opd[$i]['id'],
                    'variable_id' => $variable[$j]['id'],
                    'file_upload' => '',
                    'is_verify' => 0
                ]; 
                array_push($insert_variablekopd, $variablekopd);
            }
        }

        for ($k = 0; $k < count($insert_variablekopd); $k++) {
            $this->db->insert('variable_kopd', $insert_variablekopd[$k]);
        }
        $this->session->set_flashdata('success', 'Berhasil Generate');
        redirect('variablekopd');
    }

}