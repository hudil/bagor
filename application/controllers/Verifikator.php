<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikator extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Opd_model');
        $this->load->model('Variablekopd_model');
		$this->load->model('Indikatorkopd_model');
		$this->load->model('Indikator_model');
		$this->load->helper('indikator_cetak');
		is_login();
    }

	public function index()
	{
        $data['no'] = 1;
        $data['opd'] = $this->Opd_model->get();
		$this->load->view('app/partials/header');
		$this->load->view('app/partials/topbar');
		$this->load->view('app/partials/sidebar');
		$this->load->view('app/verifikator/index', $data);
		$this->load->view('app/partials/footer');
	}

	public function verify($opd_id = '')
	{
		if ($opd_id != '') {
			$data['no'] = 1;
			$data['opd'] = $this->Opd_model->getbyid($opd_id);
			$data['variablekopd'] = $this->Variablekopd_model->getbyopdid($opd_id);
			$this->load->view('app/partials/header');
			$this->load->view('app/partials/topbar');
			$this->load->view('app/partials/sidebar');
			$this->load->view('app/verifikator/verify', $data);
			$this->load->view('app/partials/footer');
		} else {
			redirect('verikotar');
		}
	}

	public function give_verif($var_id = '', $varkopd_id = '')
	{
		$data['indikatorkopd'] = $this->Indikatorkopd_model->getbyvkopdid($varkopd_id);
		$data['form'] = $this->Indikator_model->wherevarid($var_id);
		$data['var_id'] = $var_id;
		$data['opd_id'] = $this->Variablekopd_model->getopdid($varkopd_id)['opd_id'];
		$skor = $this->Indikatorkopd_model->getskor($varkopd_id);
		if ($skor != NULL) {
			$data['skor'] = $skor['skor'];
		} else {
			$data['skor'] = 0;
		}

		$this->form_validation->set_rules('verfikator', 'Pilih Verifikator', 'required');
	
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('app/partials/header');
			$this->load->view('app/partials/topbar');
			$this->load->view('app/partials/sidebar');
			$this->load->view('app/verifikator/give_verif', $data);
			$this->load->view('app/partials/footer');
		} else {
			$set = [
				'total_indikator' => $this->input->post('verfikator')
			];
			$this->Indikatorkopd_model->update($set, $varkopd_id);
			$verifikasi = 1;
			$dateverif = date("Y-m-d");
			$catatan = htmlspecialchars($this->input->post('catatan'));
			if ($catatan != null) {
				$varkopdset = [
					'is_verify' => $verifikasi,
					'tgl_verif' => $dateverif,
					'catatan' => $catatan
				];
			} else {
				$varkopdset = [
					'is_verify' => $verifikasi,
					'tgl_verif' => $dateverif,
					'catatan' => null
				];
			}
			
			$this->Variablekopd_model->update($varkopdset, $varkopd_id);
			$this->session->set_flashdata('success', 'Berhasil Menyimpan Data');
			redirect('verifikator/verify/' . $data['indikatorkopd'][0]['opd_id']);
		}
	}

	public function print()
	{
		$tahun = $this->input->post('tahun');
		$data['tahun'] = $tahun;
		$data['opd'] = $this->Opd_model->get_all();
		$data['no'] = 1;
		$data['total_skor'] = $this->Variablekopd_model->total_skor($tahun);
		$data['skor_akhir'] = $data['total_skor']['total'] / count($data['opd']);

		$paper = 'A4';
        $orientation = "potrait";
        $html = $this->load->view('app/verifikator/print', $data, true);
        $this->pdfgenerator->generate($html, 'hudil', $paper, $orientation);
	}

	public function _set_rules($form)
	{
		foreach($form as $form_inp) {
			$this->form_validation->set_rules($form_inp['field'], $form_inp['indikator'], 'required');
		}
	}
}
