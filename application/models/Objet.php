<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Objet extends CI_Model 
    {
        public function findObjet($idObj)
        {
            $sql = "SELECT o.*,c.nom FROM objet o,categorie c WHERE 
            o.idCategorie = c.idCat AND idObj = ? ";
            $query = $this->db->query($sql, $idObj);
            $row = $query->row_array(); 

            return $row;
        }

        public function selectObjet($idUser)
        {
            $sql = "SELECT * FROM maxprop WHERE idUser = ? ";

            $query = $this->db->query($sql, $idUser);
            $result = $query->result_array();

            return $result;
        }

        public function selectAllCat()
        {
            $sql = "SELECT nom FROM categorie";

            $query = $this->db->query($sql);
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
            $sql = "INSERT INTO Obj VALUES(NULL,?,?,?,?,?)";
            $this->db->query($sql, array($nom,$descri,$categ,$valeur,$cover));
        }

    }
?>