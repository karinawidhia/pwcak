<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lesson extends CI_Controller {

	public function index()
	{
		$this->load->view('lesson_view');		
	}

}

/* End of file lesson.php */
/* Location: ./application/controllers/lesson.php */