<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud2 extends CI_Model{
    public function __construct(){
       parent::__construct();
       
       $this ->load->database();
      }
      
      public function createRow($data){
        $sqlQ= "INSERT INTO usuarioo (correo, password) VALUES ('".$data["correo"]."' , '".$data["password"]."')";

        $query= $this->db->query($sqlQ);

        return $this->db->insert_id();
      }

      public function verificarUsuario($correo, $password) {
        
        $this->db->where('correo', $correo);
        $this->db->where('password', $password);
        $query = $this->db->get('usuarioo');
        
        
        if ($query->num_rows() > 0) {
            return $query->row(); 
        } else {
            return false; 
        }
    }
    
    

      public function createRow2($data){
        $sqlQ = $this->db->insert("usuarioo", $data);
        return $this->db->insert_id();

      }
  


}