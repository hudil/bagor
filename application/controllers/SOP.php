<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SOP extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('SOP_model');
        is_login();
    }

    public function index()
    {
        $data['modules']                = $this->SOP_model->getmodule();
        $data['sop']                    = $this->SOP_model->getsop();
        $data['no']                     = 1;

        $this->load->view('app/partials/header');
        $this->load->view('app/partials/topbar');
        $this->load->view('app/partials/sidebar');
        $this->load->view('app/sop/index', $data);
        $this->load->view('app/partials/footer');
        
    }

    public function do_upload()
    {
        $id_module                      = $this->input->post('module');

        $config['upload_path']          = './uploads/sop/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 2048;

        $this->load->library('upload', $config);

         if ( ! $this->upload->do_upload('dokumen_sop')) {
            $error = array('error' => $this->upload->display_errors());

            $this->session->set_flashdata('error', $error);
            redirect('sop');
        } else {
            $data = $this->upload->data();
            $filename = $data['file_name'];

            $insert                     = [
                'dokumen_sop'           => $filename,
                'module_id'             => $id_module
            ];

            $this->SOP_model->insert($insert);

            $this->session->set_flashdata('success', 'Berhasil Upload SOP');

            redirect('sop');
        }
    }

    public function view()
    {
        $data['sop']                    = $this->SOP_model->list_sop(1);

        $this->load->view('app/partials/header');
        $this->load->view('app/partials/topbar');
        $this->load->view('app/partials/sidebar');
        $this->load->view('app/sop/view', $data);
        $this->load->view('app/partials/footer');
    }

    public function delete($id)
    {
        if ($id != null ) {
            $id = htmlspecialchars($id);

            $sop = $this->SOP_model->get_where($id);

            if (file_exists(FCPATH."uploads/sop/" . $sop['dokumen_sop'])) {
                unlink(FCPATH."uploads/sop/" . $sop['dokumen_sop']);
            }
            $this->SOP_model->delete($id);
            $this->session->set_flashdata('success', 'Berhasil hapus data');
            redirect('sop');
        } else {
            redirect('sop');
        }
    }

}