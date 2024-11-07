<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller{

    public function __construct(){
parent::__construct();
    #cargar helper url
    $this->load->helper('url');
    
    $this->load-> model("crud");
    

}


    public function index(){
        $this->load->view("registro_views");
    }



    public function saveData(){
        $correo = $this->input->post("correo");
        $password = $this->input->post("password");
        
        
        $data = array(
         "correo" => $correo, 
          "password" => $password


        );

        
       
        
        $id = $this->crud->createRow($data);
       

        $dataToSend = array();

        $dataToSend['status']="success";
        $dataToSend['message']="registro con exito";
        $dataToSend['id']=$idProductoAux;

        echo json_encode($dataToSend, JSON_NUMERIC_CHECK);
    
}
    
}


