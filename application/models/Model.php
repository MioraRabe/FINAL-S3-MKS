<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Model extends CI_Model 
    {
        public function checkLogin($email,$mdp)
        {
            $sql = "SELECT * FROM users where email= ? AND mdp= ?";
            $query = $this->db->query($sql, array($email, $mdp));
            $row = $query->row_array(); 

            $valiny = false;
            if(count($row)>0)
            {
                $valiny = true;
                $this->session->set_userdata('idUser', $row['idUser']);
                $this->session->set_userdata('nom', $row['nom']);
                $this->session->set_userdata('typeUser', $row['typeUser']);
            }
            return $valiny;
        }

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
            $sql = "SELECT * FROM proprio where idUser = ?
            AND datePossess = (select maxdate fro vi) and idobjet= (selct idobjet from vi) 
           vi (select max(datePossess) maxDate,idobjet from proprio group by idObjet)";
            $query = $this->db->query($sql, array($idUser));
            $result = $query->result_array();

            return $result;
        }
    }
?>