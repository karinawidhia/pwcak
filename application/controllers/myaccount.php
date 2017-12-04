<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myaccount extends CI_Controller {

	public function index()
	{
		$this->load->view('account_view');	
	}

}

/* End of file myaccount.php */
/* Location: ./application/controllers/myaccount.php */