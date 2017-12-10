<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myaccount extends CI_Controller {

	public function index()
	{
		$this->load->view('account_view');	
	}
	public function add_course(){
		$this->load->view('add_course_view');
	}
	public function course_title(){

		if($this->input->post('submit')){

			$this->form_validation->set_rules('coursename', 'Course Name', 'trim|required');
			$this->form_validation->set_rules('subject','Subject','trim|required');
			// $this->form_validation->set_rules('thumnail', 'Thumbnail','trim|required');
			$this->form_validation->set_rules('description','Description','trim|reuired');

			if($this->form_validation->run()==TRUE){
				if($this->course_model->add_course_title() == TRUE){
					redirect('myaccount/add_course');
				}else{
					$this->session->set_flashdata('notif_failed','isi data dengan benar!');
					redirect('myaccount');
				}
			}else{
				$this->session->set_flashdata('notif_failed',validation_errors());
				redirect('myaccount');
			}
		}

		}
	}

	

/* End of file myaccount.php */
/* Location: ./application/controllers/myaccount.php */