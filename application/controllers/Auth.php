<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

	public function index()
	{
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('app/login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $users = $this->Auth_model->get_user($username);
            if ($users != NULL) {
                if (password_verify($password, $users['password'])) {
                    $sess_login = [
                        'name' => $users['name'],
                        'opd_id' => $users['opd_id'],
                        'role_id' => $users['role_id'],
                        'photo' => $users['photo']
                    ];
                    $this->session->set_userdata($sess_login);
                    
                    if ($users['role_id'] == '2') {
                        redirect('dashboardverif');
                    } else {
                        redirect('dashboard');
                    }
                } else {
                    $this->session->set_flashdata('error', 'Password salah');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('error', 'Username tidak ditemukan');
                redirect('auth');
            }
        }
	}

    public function logout()
    {
        $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'name' && $key != 'opd_id') {
                $this->session->unset_userdata($key);
            }
        }
        $this->session->sess_destroy();
        redirect('auth');
    }
}
