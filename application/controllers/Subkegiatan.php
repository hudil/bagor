<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subkegiatan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Subkegiatan_model');
	}

	public function index()
	{
		// ambil data dari model
		$data['subkegiatan'] = $this->Subkegiatan_model->get();
		$data['no'] = 1;

		$this->load->view('app/partials/header');
		$this->load->view('app/partials/topbar');
		$this->load->view('app/partials/sidebar');
		$this->load->view('app/subkegiatan/index', $data);
		$this->load->view('app/partials/footer');
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama_subkeg', 'Nama Subkegiatan', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('app/partials/header');
			$this->load->view('app/partials/topbar');
			$this->load->view('app/partials/sidebar');
			$this->load->view('app/subkegiatan/tambah');
			$this->load->view('app/partials/footer');
		} else {
			$subkeg_data = [
				'nama_subkeg' => htmlspecialchars($this->input->post('nama_subkeg'))
			];
			
			// insert db from model
			$result_insert = $this->Subkegiatan_model->insert($subkeg_data);

			// check status insert

			// send flashmessage
			$this->session->set_flashdata('success', 'Berhasil menambahkan data');
			
			// redirect page to index
			redirect('subkegiatan/index');
		}
	}

	public function edit($id) 
	{
		$id = htmlspecialchars($id);
		if ($id != NULL) {
			if (is_numeric($id)) {
				// jika benar nomor, lakukan get data
				$data['subkeg'] = $this->Subkegiatan_model->get_byId($id);

				$this->form_validation->set_rules('nama_subkeg', 'Nama Subkegiatan', 'required');
				if ($this->form_validation->run() == FALSE) {
					$this->load->view('app/partials/header');
					$this->load->view('app/partials/topbar');
					$this->load->view('app/partials/sidebar');
					$this->load->view('app/subkegiatan/edit', $data);
					$this->load->view('app/partials/footer');
				} else {
					$subkeg_data = [
						'nama_subkeg' => htmlspecialchars($this->input->post('nama_subkeg'))
					];
					
					// update db from model
					$result_update = $this->Subkegiatan_model->update($id, $subkeg_data);
		
					// check status update
		
					// send flashmessage
					$this->session->set_flashdata('success', 'Berhasil mengubah data');
					
					// redirect page to index
					redirect('subkegiatan/index');
				}
			} else {
				echo "<script>alert('id tidak valid')</script>";
				echo "<script>document.location.href = '$subkeg_url'; </script>";
			}
		} else {
			redirect('subkegiatan/index');
		}
	}

	public function delete($id)
	{
		$subkeg_url = base_url('subkegiatan/index');
		$id = htmlspecialchars($id);

		if ($id != NULL) {
			if (is_numeric($id)) {
				// jika benar nomor, lakukan delete data
				$delete = $this->Subkegiatan_model->delete($id);

				// check status delete
				if ($delete > 0) {
					// send flashmessage
					$this->session->set_flashdata('success', 'Berhasil menghapus data');
					
					// redirect page to index
					redirect('subkegiatan/index');
				}
			} else {
				echo "<script>alert('id tidak valid')</script>";
				echo "<script>document.location.href = '$subkeg_url'; </script>";
			}
		} else {
			redirect('subkegiatan/index');
		}
	}

}
