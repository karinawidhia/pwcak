<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class answer extends CI_Controller {

	public function index()
	{
		$this->load->view('answer_view');

		/*$data['main_view'] = 'answer_view';
		$this->load->view('template', $data);*/
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */  