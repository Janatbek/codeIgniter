<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Random extends CI_Controller {
	
	public function index()
	{
		$result  = array("num" => $this->generatenum());
		$this->load->view("random_word_view", $result);

	}

	private function generatenum(){	
		$randomstring = "";
		$counter;
		$characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
		
		for ($i = 0; $i < 14; $i++)
		{
			$randomstring = $randomstring . $characters[rand(0, 35)];
		}
		return $randomstring;		
	}
		
	
	public function generate()
	{	
		

		$this->session->set_userdata('randomWord', $this->generatenum());

		if($this->session->userdata('counter'))
		{
			$counter = $this->session->userdata('counter');
			$counter++;
			$this->session->set_userdata('counter', $counter);	

		}
		else
		{
			$this->session->set_userdata('counter', 1);
		}
		redirect('/');
	}


}
