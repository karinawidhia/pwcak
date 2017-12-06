<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('register_model');
	}

	public function submit_user(){
		if($this->input->post('submit')) {

			$this->form_validation->set_rules('name','Name','trim|required');
			$this->form_validation->set_rules('email','Email','trim|required');
			$this->form_validation->set_rules('username','Username','trim|required');
			$this->form_validation->set_rules('password','Password','trim|required');
			$this->form_validation->set_rules('city','City','trim|required');
			$this->form_validation->set_rules('bio','Bio','trim|required');

			if($this->form_validation->run() == TRUE){
				if($this->register_model->register_user()==TRUE)
				{
					// $data['notif'] = 'Berhasil!';
					$this->session->set_flashdata('notif','Pendaftaran berhasil!');
					$data['main_view'] = 'home_view';
					$this->load->view('template',$data);
				}else{
					// $data['notif'] = 'Gagal!';
					$this->session->set_flashdata('notif','Pendaftaran gagal!');
					$data['main_view'] = 'home_view';
					$this->load->view('template',$data);
				}
			}else{
				$data['notif'] = validation_errors();
				$data['main_view'] = 'home_view';
				$this->load->view('template',$data);
			}
		}else{
			$data['main_view'] = 'home_view';
			$this->load->view('template',$data);
		}

	}
}