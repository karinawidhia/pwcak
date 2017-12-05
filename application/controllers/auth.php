<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
	}
	public function index()
	{
		redirect('home');		
	}

	public function login(){
		if ($this->input->post('submit')) {
			
		
	 	$this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

                if ($this->form_validation->run() == TRUE ) {
                    
                    if ($this->auth_model->authentication() == "TRUE") {
                        $this->session->set_flashdata('notif', 'Anda telah berhasil login, selamat belajar !');
                        redirect('home');
                    } else {
                        $this->session->set_flashdata('notif', 'Email atau Password anda tidak valid, coba lagi');
                        redirect('home');
                    }
                } else {
                	$this->session->set_flashdata('notif', validation_errors());
                        redirect('home');
                }
	}
}




}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */