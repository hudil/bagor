<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paper extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Subkegiatan_model');
    }

	public function index()
	{
        $this->load->view('app/partials/header');
		$this->load->view('app/partials/topbar');
		$this->load->view('app/partials/sidebar');
		$this->load->view('app/paper/index');
		$this->load->view('app/partials/footer');
	}

    public function tambah()
    {
        $data['subkegiatan'] = $this->Subkegiatan_model->get();

        $this->form_validation->set_rules('nama_subkeg', 'Subkegiatan', 'required');
        if (empty($_FILES['cover']['name']) && empty($_FILES['majalah']['name']))
        {
            $this->form_validation->set_rules('cover', 'Cover', 'required');
            $this->form_validation->set_rules('majalah', 'Majalah', 'required');
        }

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('app/partials/header');
            $this->load->view('app/partials/topbar');
            $this->load->view('app/partials/sidebar');
            $this->load->view('app/paper/tambah',$data);
            $this->load->view('app/partials/footer');
        } else {
            $subkegiatan = $this->input->post('nama_subkeg');

            if (isset($_FILES['cover'])) {
                // upload cover
                $config [ 'upload_path' ]           =  './uploads/cover' ; 
                $config [ 'allowed_types' ]         =  'jpeg|jpg|png';
            } else if (isset($_FILES['majalah'])) {
                // upload cover
                $config [ 'upload_path' ]           =  './uploads/majalah' ; 
                $config [ 'allowed_types' ]         =  'pdf';
            }
            
            $this -> load -> library ( 'upload' ,  $config );

            if  ( !  $this -> upload -> do_upload ( 'cover' ) ) { 
                    $data  =  array ( 
                        'error'  =>  $this -> upload -> display_errors (),
                        'subkegiatan' => $this->Subkegiatan_model->get()
                    );

                    $this->load->view('app/partials/header');
                    $this->load->view('app/partials/topbar');
                    $this->load->view('app/partials/sidebar');
                    $this->load->view('app/paper/tambah',$data);
                    $this->load->view('app/partials/footer');
            } else { 
                    $data  =  array ( 'upload_data'  =>  $this -> unggah -> data ());

                    $this -> load -> view ( 'upload_success' ,  $data ); 
            } 
        }
    }
}
