<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Objet extends CI_Model 
    {
        public function getobject()
        {
            $sql = "SELECT * FROM objet";
            $query = $this->db->query($sql);
            $result = $query->result_array(); 

            return $result;
        }

        public function findobject($idObj)
        {
            $sql = "SELECT * FROM objet where idObj = ? ";
            $query = $this->db->query($sql, array($idObj));
            $row = $query->row_array(); 

            return $row;
        }

        public function selectobject($idUser)
        {
            $sql = "SELECT idObj FROM proprio where idUser = ?
            AND datePossess in (select max(datepossess) from proprio group by idObjet)";

            $query = $this->db->query($sql, array($idUser));
            $result = $query->result_array();

            return $result;
        }

        public function selectcat($idObj)
        {
            $sql = "SELECT nom FROM categorie where
            idCat = (select idCat from objet where idObj = ?) ";


            $query = $this->db->query($sql, array($idObj));
            $row = $query->row_array();

            return $row;
        }
    }
?>