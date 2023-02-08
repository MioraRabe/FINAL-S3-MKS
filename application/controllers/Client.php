<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {
	public function __construct() {
        parent::__construct();
		$this->load->model('Objet');
		$this->load->model('Model');
		$this->load->model('Root');
    }
    public function index()
	{
		$data['contents'] = 'page/client';
		$data['titre'] = 'Takalo';
		$data['objects'] =$this->Objet->getObjetUser($this->session->userdata('idUser'));
		// $props=$this->Model->listPropEnCours($this->session->userdata('idUser'));

		// foreach($props as $prop){
		// 	$otherProp[]=$prop['idObjet1'];
		// }
		// foreach($props as $prop){
		// 	$myObj[]=$prop['idObjet2'];
		// }
		// $listPropose=$this->Objet->getlistobj($otherProp);
		// $mine=$this->Objet->getlistobj($myObj);
		// // $otherProp=$props[0]['idObjet1'];
		// var_dump($props);
		// echo "other prop";
		// var_dump($otherProp);
		// echo "other prop detail";

		// var_dump($objetsss);
		// var_dump($mine);
		$this->load->view('mainpage',$data);
	}	
	public function other(){
		$data['contents'] = 'page/objetAutre';
		$data['titre'] = 'Takalo';
		$data['objects'] =$this->Objet->getOtherObjets($this->session->userdata('idUser'));
		$this->load->view('mainpage',$data);
	}
	public function fiche(){
		$idObjet = $this->input->get("idObjet");
		$data['contents'] = 'page/ficheObjet';
		$data['titre'] = 'Fiche';
		$data['myobjects'] =$this->Objet->getObjetUser($this->session->userdata('idUser'));
		$data['objects'] =$this->Objet->findObjet($idObjet);
		$data['idObjet'] =$idObjet;
		$this->load->view('mainpage',$data);
	}
	public function proposer(){
		$myObj = $this->input->post("myObj");
		$otherObj = $this->input->post("otherObj");
		$otherId = $this->input->post("otherId");
		$this->Model->proposer($this->session->userdata('idUser'),$myObj,$otherId,$otherObj);
		redirect('other');
	}



}