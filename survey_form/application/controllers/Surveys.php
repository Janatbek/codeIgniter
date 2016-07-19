<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surveys extends CI_Controller {
	protected $form_result = array();
	public function index()
	{
		$this->load->view('surveys_view');
	}
	
}
