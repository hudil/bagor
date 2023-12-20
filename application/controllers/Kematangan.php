<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kematangan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Variablekopd_model');
		$this->load->model('Indikator_model');
		$this->load->model('Indikatorkopd_model');
		$this->load->model('Variable_model');
		$this->load->model('Opd_model');
		$this->load->model('Kematangan_model');
		$this->load->helper('total_kematangan');
		$this->load->helper('romawi');
		$this->load->helper('indikator_cetak');
		is_login();
	}

	public function index()
	{
		$data['no'] = 1;
		$opd_id = $this->session->userdata('opd_id');
		$data['variable_kematangan'] = $this->Variablekopd_model->getbyopdid($opd_id);
		$data['years'] = range(2022, date("Y"));
		$this->load->view('app/partials/header');
		$this->load->view('app/partials/topbar');
		$this->load->view('app/partials/sidebar');
		$this->load->view('app/kematangan/index', $data);
		$this->load->view('app/partials/footer');
	}

	public function form($var_id = '', $error = [])
	{
		$opd_id = $this->session->userdata('opd_id');
		if ($var_id != '') {
			$data['variable'] = $this->Variable_model->getbyid($var_id);
			$variable = $this->Variable_model->get();
			if ($var_id > count($variable)) {
				redirect('kematangan');
			} else {
				if (!empty($error)) {
					$data['error'] = $error;
				}
				$data['form'] = $this->Indikator_model->wherevarid($var_id);
				$data['var_id'] = $var_id;
				$this->load->view('app/partials/header');
				$this->load->view('app/partials/topbar');
				$this->load->view('app/partials/sidebar');
				$this->load->view('app/kematangan/form', $data);
				$this->load->view('app/partials/footer');
			}
		} else {
			redirect('kematangan');
		}
	}

	public function editform($varid = '', $varkopdid = '')
	{
		$data['variable'] = $this->Variable_model->getbyid($varid);
		$data['form'] = $this->Indikator_model->wherevarid($varid);
		$data['var_id'] = $varid;
		$data['indikatorkopd'] = $this->Indikatorkopd_model->getformedit($varkopdid);
		$data['variablekopd'] = $this->Variablekopd_model->find($varkopdid);
		$this->load->view('app/partials/header');
		$this->load->view('app/partials/topbar');
		$this->load->view('app/partials/sidebar');
		$this->load->view('app/kematangan/editform', $data);
		$this->load->view('app/partials/footer');
	}

	public function proc_form()
	{
		$var_id = $this->input->post('variable_id');
		$skor = $this->input->post('pilih');
		if ($skor != null) {
			$opd_id = $this->session->userdata('opd_id');
			$variable = $this->Variable_model->getbyid($var_id)['variable'];
			$variable = str_replace(' ', '_', $variable);
			$opd = $this->Opd_model->getbyid($opd_id)['opd'];
			
			$indikator_id = $this->Indikator_model->getid($var_id, $skor)['id'];
	
			// // get data variable kopd
			$varkopd = $this->Variablekopd_model->getby($var_id, $opd_id);
			$filename_upload = str_replace(' ', '_', $opd) . '_' . $variable . '_' . $varkopd['tahun'] . '.pdf';
			if ($varkopd != NULL) {
	
				if ($_FILES['file_pendukung']['error'] != 4) {
					$config['upload_path']          = './uploads/file_pendukung/tingkat_kematangan/';
					$config['allowed_types']        = 'pdf';
					$config['max_size']             = 2048;
					$config['file_name']			= $filename_upload;
		
					$this->load->library('upload', $config);
					// $file_pendukung = $_FILES['file_pendukung'];
					// if ( ! $this->upload->do_upload('file_pendukung')) {
					// 	$error = array($this->upload->display_errors());
					// 	$this->session->set_flashdata('error', $error);
					// 	redirect('kematangan/form/' . $var_id);
					// }
				} else {
					$filename_upload = NULL;
				}
				$updatevarkopd = [
					'file_upload' => $filename_upload,
					'is_input' => 1
				];
	
				$this->Kematangan_model->update_input($updatevarkopd, $opd_id, $var_id);
	
				$insertindikatorkopd = [
					'variablekopd_id' => $varkopd['id'],
					'indikator_id' => $indikator_id,
					'total_indikator' => $skor
				];
	
				$this->Kematangan_model->insert_indikator_kopd($insertindikatorkopd);
				$this->session->set_flashdata('success', 'Berhasil input data');
				redirect('kematangan');
			} else {
				redirect('kematangan');
			}
		} else {
			$this->session->set_flashdata('error', 'Pilih dulu lahhh');
			redirect('kematangan/form/' . $var_id);
		}
	}

	public function proc_editform()
	{
		$var_id = $this->input->post('variable_id');
		$varkopd_id = $this->input->post('variablekopd_id');
		$skor = $this->input->post('pilih');
		$file_upload_lama = $this->input->post('file_pendukunglama');
		if ($skor != null) {
			$opd_id = $this->session->userdata('opd_id');
			$variable = $this->Variable_model->getbyid($var_id)['variable'];
			$variable = str_replace(' ', '_', $variable);
			$opd = $this->Opd_model->getbyid($opd_id)['opd'];
			
			$indikator_id = $this->Indikator_model->getid($var_id, $skor)['id'];
	
			// // get data variable kopd
			$varkopd = $this->Variablekopd_model->getby($var_id, $opd_id);
			$filename_upload = str_replace(' ', '_', $opd) . '_' . $variable . '_' . $varkopd['tahun'] . '.pdf';
			if ($varkopd != NULL) {
				if ($_FILES['file_pendukung']['error'] != 4) {
					if (file_exists(FCPATH."uploads/file_pendukung/tingkat_kematangan/" . $file_upload_lama)) {
						unlink(FCPATH."uploads/file_pendukung/tingkat_kematangan/" . $file_upload_lama);
					}
					
					$config['upload_path']          = './uploads/file_pendukung/tingkat_kematangan/';
					$config['allowed_types']        = 'pdf';
					$config['max_size']             = 2048;
					$config['file_name']			= $filename_upload;

					
		
					$this->load->library('upload', $config);
					// $file_pendukung = $_FILES['file_pendukung'];
					// if ( ! $this->upload->do_upload('file_pendukung')) {
					// 	$error = array($this->upload->display_errors());
					// 	$this->session->set_flashdata('error', $error);
					// 	redirect('kematangan/editform/' . $var_id . '/' . $varkopd_id);
					// }
				} else {
					$filename_upload = $file_upload_lama;
				}
				$updatevarkopd = [
					'file_upload' => $filename_upload,
				];
	
				$this->Kematangan_model->update_input($updatevarkopd, $opd_id, $var_id);
	
				$updateindikatorkopd = [
					'total_indikator' => $skor
				];
	
				$this->Kematangan_model->update_indikator_kopd($updateindikatorkopd, $varkopd_id);
				$this->session->set_flashdata('success', 'Berhasil edit data');
				redirect('kematangan');
			} else {
				redirect('kematangan');
			}
		} else {
			$this->session->set_flashdata('error', 'Pilih dulu lahhh');
			redirect('kematangan/editform/' . $var_id . '/' . $varkopd_id);
		}
	}

	public function print()
	{
		$tahunbulan = $this->input->post('tahun');
		$opd_id = $this->session->userdata('opd_id');
		$tahun = explode("-", $tahunbulan)[0];

		$tampung = [];

		// get variable kopd berdasarkan tahun, opd id
		$data['variable'] = $this->Variable_model->get();
		$data['no'] = 1;
		$data['no_indikator'] = 1;
		$data['tahun'] = $tahun;
		
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
        $this->pdfgenerator->generate($html, 'hudil', $paper, $orientation);
	}
}
