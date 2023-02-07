<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->has_userdata('idUser'))
		{
			redirect('login/index');  
		}
		$data['nom'] = $this->session->userdata('nom');
		$this->load->model('Model');
    }

    public function admin()
	{
		$data = array();
		// $data['listeMarque'] = $this->Model->listeMarque();
        $data['contents'] = 'page/admin';
		$this->load->view('mainpage',$data);
	}

    public function client()
	{
		$data = array();
		// $data['listeMarque'] = $this->Model->listeMarque();
        $data['contents'] = 'page/client';
		$this->load->view('mainpage',$data);
	}
}
?>