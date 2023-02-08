<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Root extends CI_Model 
    {
        public function __construct() {
            parent::__construct();
        }
        public function countUser(){
            $sql = "SELECT count(*) as nbUser FROM users ";
            $query = $this->db->query($sql);
            $row = $query->row_array();

            return $row;
        }

        public function getObjets()
        {
            $sql = "SELECT * FROM objetprop";
            $query = $this->db->query($sql);
            $result = $query->result_array(); 

            return $result;
        }

        public function suppr($idObj){
            $sql = "DELETE FROM objet WHERE idObjt = ? ";
            $this->db->query($sql, $idObj);
        }

    }
?>