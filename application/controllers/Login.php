<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
        parent::__construct();
		$this->load->model('Model');
    }
	
    public function index()
	{
		$this->load->view('page/index');
	}
	public function inscription()
	{
		$this->load->view('page/inscription');
	}	
	
	public function login()
	{
		$email = $this->input->post("email");
		$mdp = $this->input->post("mdp");

		if($this->Model->checkLogin($email,$mdp))
		{
			if($this->session->userdata('typeUser') == 0){
				redirect('admin/index');
			}else{
				redirect('client/index');
			}
			// $this->session->set_userdata('mail', $mail);
		}else{
			redirect('login/index');
		}
	}
	public function insertUser()
	{
		$nom = $this->input->post("nom");
		$email = $this->input->post("email");
		$mdp = $this->input->post("mdp");
		if($this->Model->insertUser($nom,$email,$mdp)){
			if($this->Model->checkLogin($email,$mdp))
			{				
				redirect('client/index');
			}
		}else {
			redirect('login/inscription');
		}

	}
	public function deconexion()
	{
		$this->session->sess_destroy();
		redirect('login/index');
	}
}
