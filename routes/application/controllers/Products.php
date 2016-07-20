<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	
	public function index()
	{
		//$this->load->view('welcome_message');
		echo "this is index";
	}
	public function p($id1, $id2)
	{
		echo $id1. " " . $id2;
	}
}
