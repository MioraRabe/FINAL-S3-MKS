<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {
	public function __construct() {
        parent::__construct();
		$this->load->model('Objet');
		$this->load->model('Root');
    }
    public function index()
	{
		$data['contents'] = 'page/client';
		$data['titre'] = 'Takalo';
		$data['objects'] =$this->Objet->getObjetUser($this->session->userdata('idUser'));
		$this->load->view('mainpage',$data);
	}	
	public function other(){
		$data['contents'] = 'page/objetAutre';
		$data['titre'] = 'Takalo';
		$data['objects'] =$this->Objet->getOtherObjets($this->session->userdata('idUser'));
		$this->load->view('mainpage',$data);
	}

}