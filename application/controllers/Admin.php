<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
        parent::__construct();
		$this->load->model('Objet');
		$this->load->model('Root');
    }
    public function index()
	{
		$data['contents'] = 'page/admin';
		$data['titre'] = 'Takalo-Admin';
		$data['objects'] =$this->Objet->getAllObjets();
		$data['categories'] =$this->Objet->selectAllCat();
		$data['nbUser'] =$this->Root->countUser();
		$this->load->view('mainpage',$data);
	}	
	
    public function triage()
	{
		$cat = $this->input->get("cat");
		$data['contents'] = 'page/admin';
		$data['titre'] = 'Takalo-Admin';
		$data['objects'] =$this->Objet->selectParCat($cat);
		$data['categories'] =$this->Objet->selectAllCat();
		$data['nbUser'] =$this->Root->countUser();
		$this->load->view('mainpage',$data);
	}	
}