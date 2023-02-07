<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
	{
		$this->load->view('pages/header');
	}	

	public function login()
	{
		$email = $this->input->post("email");
		$mdp = $this->input->post("mdp");

		$this->load->model('Model');
		if($this->Model->checkLogin($email,$mdp))
		{
			if($this->session->userdata('typeUser') == 0){
				redirect('accueil/admin');
			}else{
				redirect('accueil/client');
			}
		}else{
			redirect('login/index');
		}
	}

	
}
