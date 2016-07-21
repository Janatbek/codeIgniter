<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_page');
	}
	public function create()
	{
		$post = $this->input->post();
		var_dump($post); die();
		echo "login page";
	}
	public function register()
	{
		//$post = $this->session->userdata();
		$post = $this->input->post();
		var_dump($post);
		echo "registration page";
	}
}