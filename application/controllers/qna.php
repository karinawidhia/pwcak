<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qna extends CI_Controller {

	public function index()
	{
				$data = [
				'main_view'  => 'qna_view',
		 		];
				$this->load->view('template', $data);
	}

}

/* End of file qna.php */
/* Location: ./application/controllers/qna.php */