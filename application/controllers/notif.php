<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notif extends CI_Controller {

	public function index()
	{
		$this->load->view('notification_view');
	}

}

/* End of file notif.php */
/* Location: ./application/controllers/notif.php */