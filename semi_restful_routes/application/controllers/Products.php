<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
		
	}
	public function add_product()
	{
		
		$this->load->view('new_product');

	}
	public function create(){
		if($this->session->userdata)
		{
			echo "we are in create method";	}
		}

	public function show()
	{
		echo "I am showing";
		$this->load->view('show');
	}
	public function edit()
	{
		$this->load->view('edit');
	}

	public function update()
	{
		echo "on update page";
	}
	public function destroy()
	{
		echo "We are destroyin the world";
	}

	


}
