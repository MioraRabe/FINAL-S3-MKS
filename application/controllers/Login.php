<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
	{
		
		$this->load->view('page/login');
	}	

	public function login()
	{
		$mail = $this->input->post("email");
		$pass = $this->input->post("mdp");

		$this->load->model('Model');
		if($this->Model->checkLogin($mail,$pass))
		{
			// $this->session->set_userdata('mail', $mail);
			redirect('product/index');
		}else{
			redirect('welcome/index');
		}
	}
}
