<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Variable_model');
		$this->load->helper('total_kematangan');
		$this->load->helper('romawi');
		$this->load->helper('indikator_cetak');
		is_login();
	}

    public function index()
    {
        $this->load->view('app/partials/header');
		$this->load->view('app/partials/topbar');
		$this->load->view('app/partials/sidebar');
		$this->load->view('app/laporan/index_mandiri');
		$this->load->view('app/partials/footer');
    }

    public function mandiri()
    {
        $tahun = $this->input->post('tahun');
        $nama_kepala = $this->input->post('nama_kepala');
        $nip = $this->input->post('nip_kepala');
        $jabatan = $this->input->post('jabatan_kepala');
		$opd_id = $this->session->userdata('opd_id');

		$tampung = [];

		// get variable kopd berdasarkan tahun, opd id
		$data['variable'] = $this->Variable_model->get();
		$data['no'] = 1;
		$data['no_indikator'] = 1;
		$data['tahun'] = $tahun;
        $data['nama_kepala'] = $nama_kepala;
        $data['nip'] = $nip;
        $data['jabatan'] = $jabatan;
        $data['opd'] = $this->db->get_where('opd', ['id' => $opd_id])->row_array()['opd'];
		$namafile = $data['opd'] . '_' . $data['tahun'] . '_penilaian_mandiri.pdf';
		
		// foreach($variable as $var) {
		// 	$lempar = [
		// 		'no' => $no,
		// 		'variable_name' => $var['variable'],
		// 		'indikator' => []
		// 	];
		// 	$indikator = $this->Indikator_model->wherevarid($var['id']);
		// 	foreach ($indikator as $ind) {
		// 		$lempar_ind = [
		// 			'tingkat' => $ind['tingkat_kematangan'],
		// 			'indikator' => $ind['indikator']
		// 		];
		// 		array_push($lempar['indikator'], $lempar_ind);
		// 	}
			
		// 	array_push($tampung, $lempar);
		// }

		$paper = 'A4';
        $orientation = "potrait";
        $html = $this->load->view('app/kematangan/print', $data, true);
        $this->pdfgenerator->generate($html, $namafile, $paper, $orientation);
    }

    public function index_verif()
    {
        $this->load->view('app/partials/header');
		$this->load->view('app/partials/topbar');
		$this->load->view('app/partials/sidebar');
		$this->load->view('app/laporan/index_verif');
		$this->load->view('app/partials/footer');
    }

    public function mandiri_verif()
    {
        $tahun = $this->input->post('tahun');
        $nama_kepala = $this->input->post('nama_kepala');
        $nip = $this->input->post('nip_kepala');
        $jabatan = $this->input->post('jabatan_kepala');
		$opd_id = $this->session->userdata('opd_id');

		$query_verifcetak = $this->db->query("SELECT COUNT(*) AS total_verify FROM variable_kopd WHERE tahun = '$tahun' AND opd_id = '$opd_id' AND is_verify = '1' AND is_input = '1'")->result_array();

		$query_tahun = $this->db->query("SELECT tgl_verif FROM variable_kopd WHERE tahun = '$tahun' AND opd_id = '$opd_id' AND is_verify = '1' AND is_input = '1' ORDER BY variable_id DESC LIMIT 1")->row_array();

		$base_url = base_url('laporan/index_verif');
		
		if ($query_verifcetak['total_verify'] < 11) {
			$this->session->set_flashdata('error', 'Lakukan verifikasi dahulu. dapat menghubungi admin');
			redirect('laporan/index_verif');
		}
        

		$tampung = [];

		// get variable kopd berdasarkan tahun, opd id
		$data['variable'] = $this->Variable_model->get();
		$data['no'] = 1;
		$data['no_indikator'] = 1;
		$data['tahun'] = $tahun;
        $data['nama_kepala'] = $nama_kepala;
        $data['nip'] = $nip;
        $data['jabatan'] = $jabatan;
        $data['opd'] = $this->db->get_where('opd', ['id' => $opd_id])->row_array()['opd'];
		$data['tgl_verif'] = $query_tahun['tgl_verif'];
		$namafile = $data['opd'] . '_' . $data['tahun'] . '_terverifikasi.pdf';
		
		// foreach($variable as $var) {
		// 	$lempar = [
		// 		'no' => $no,
		// 		'variable_name' => $var['variable'],
		// 		'indikator' => []
		// 	];
		// 	$indikator = $this->Indikator_model->wherevarid($var['id']);
		// 	foreach ($indikator as $ind) {
		// 		$lempar_ind = [
		// 			'tingkat' => $ind['tingkat_kematangan'],
		// 			'indikator' => $ind['indikator']
		// 		];
		// 		array_push($lempar['indikator'], $lempar_ind);
		// 	}
			
		// 	array_push($tampung, $lempar);
		// }

		$paper = 'A4';
        $orientation = "potrait";
        $html = $this->load->view('app/kematangan/print_withverif', $data, true);
        $this->pdfgenerator->generate($html, $namafile, $paper, $orientation);
    }

}