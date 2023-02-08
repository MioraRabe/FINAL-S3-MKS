<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Objet extends CI_Model 
    {
        public function findObjet($idObj)
        {
            $sql = "SELECT * from objetprop WHERE idObjet =".$idObj;
            $query = $this->db->query($sql);
            $row = $query->row_array();

            return $row;
        }
        public function findNameObjet($idObj)
        {
            $sql = "SELECT nom from objetprop WHERE idObjet =".$idObj;
            $query = $this->db->query($sql);
            $row = $query->row_array();

            return $row;
        }

        public function getObjetUser($idUser)
        {
            $sql = "SELECT * FROM objetprop WHERE idUser = ?";
            $query = $this->db->query($sql , $idUser);
            $result = $query->result_array(); 

            return $result;
        }

        public function getOtherObjets($idUser)
        {
            $sql = "SELECT * FROM objetprop WHERE idUser != ?";
            $query = $this->db->query($sql , $idUser);
            $result = $query->result_array(); 

            return $result;
        }

        public function getAllObjets()
        {
            $sql = "SELECT * FROM objetprop";
            $query = $this->db->query($sql);
            $result = $query->result_array(); 

            return $result;
        }
        public function getlistobj($listIdObj){
            $str=implode(",", $listIdObj);

            $sql = "SELECT * FROM objetprop WHERE idObjet in (".$str.")";
            $query = $this->db->query($sql);
            $result = $query->result_array(); 
            return $result;
        }

        public function selectAllCat()
        {
            $sql = "SELECT nomCat FROM categorie";

            $query = $this->db->query($sql);
            $result = $query->result_array();

            return $result;
        }
        public function selectParCat($cat){
            $sql="SELECT objetprop.* from objetprop join categorie on idCat=idCategorie where objetprop.nomCat= ?";
            $query = $this->db->query($sql , $cat);
            $result = $query->result_array(); 
            return $result;
        }

        public function selectCatId($nom)
        {
            $sql = "SELECT id FROM categorie WHERE nomCat = ? ";

            $query = $this->db->query($sql, $nom);
            $row = $query->row_array();

            return $row;
        }

        public function insertObjet($nom,$descri,$categ,$valeur,$cover)
        {
            $sql = "INSERT INTO Objet VALUES(NULL,?,?,?,?,?)";
            $this->db->query($sql, array($nom,$descri,$categ,$valeur,$cover));
        }

        public function search($tap,$categ){
            if(strcmp($categ,'tout')==0){
                $sql = "SELECT * FROM objet WHERE descri = ? ";
            }
            else{
                $sql = "SELECT * FROM objetprop WHERE descri = ?
                AND nomcat = '".$categ."'";
            }

            $query = $this->db->query($sql, $tap);
            $result = $query->result_array();

            return $result;
        }

    }
?>