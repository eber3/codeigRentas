<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Model{
    public function __construct(){
       parent::__construct();
       
       $this ->load->database();
      }
      
      public function createRow($data){
        $sqlQ= "INSERT INTO usuarioo (correo, password) VALUES ('".$data["correo"]."' , '".$data["password"]."')";

        $query= $this->db->query($sqlQ);

        return $this->db->insert_id();
      }

      public function createRow2($data){
        $sqlQ = $this->db->insert("usuarioo", $data);
        return $this->db->insert_id();

      }
  
public function readData(){
  $query = $this->db->get("usuarioo");

  if($query->num_rows() > 0){
    $allData = array();
    foreach($query->result() as $row){
      $allData[] = $row;
    }  
    return $allData;
  }else{
    return array();  
  }
}
  


}