<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Session extends CI_Controller
{
	public function new_session()
	{
		echo "New Session";
	}
	public function login()
	{
		redirect("session/new_session");
	}
	public function destroy(){

		echo "logged out";
	}
	public function logoff(){
		$this->destroy();
	}

}




 ?>