<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IniciarSesion extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        $this->load->helper('url');
        
    }
    
    public function index() {
        
        $this->load->view("inicio_de_sesion"); 
    }
    public function saveData(){
        
        $correo = $this->input->post("correo");
        $password = $this->input->post("password");
        
        
        $data = array(
         "correo" => $correo, 
         "password" => $password

        );
        $idUser = $this->crud->createRow($data);
       

      //forma d hacer arreglos
        $dataToSend = array();

        $dataToSend['status']="success";
        $dataToSend['message']="inicio de sesion con exito";
        $dataToSend['idUser']=$idUser;

        echo json_encode($dataToSend, JSON_NUMERIC_CHECK);
    }
}
