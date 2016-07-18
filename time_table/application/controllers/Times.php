<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Times extends CI_Controller {
	
	protected $view_data = array();

	public function main()
	{
		$this->view_data['month'] = date("M j, Y");
		$this->view_data['time'] = date("g:i a");
		$this->load->view('time_view', $this->view_data);
	}

}
