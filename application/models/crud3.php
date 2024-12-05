<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud3 extends CI_Model{
    public function __construct(){
       parent::__construct();
       
       $this ->load->database();
      }

      public function registro($data){
        $sqlQ="INSERT INTO imag (imagen, ubicacion, precio, caracteristicas) VALUES ('".$data["image_path"]."' , '".$data["ubicacion"]."' , '".$data["precio"]."' , '".$data["caracteristicas"]."' )";   
    //image_path 

    $query = $this->db->query($sqlQ);
    
    return $this->db->insert_id();
    
    
    }
    
    //READ DATA
    public function readData(){
        $query = $this->db->get("imag");
    
        if($query->num_rows()>0){
            $allData = array();
            foreach($query->result() as $row){
                $allData[] = $row;
            }
             return $allData;   
         }//llave if
        else{
            return array();
        }//llave else
      }//llave funcion readData
    
    
    }
  