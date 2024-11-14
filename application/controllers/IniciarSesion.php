<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IniciarSesion extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        $this->load->helper('url');

        $this->load-> model("crud2");
        
    }
    
    public function index() {
        
        $this->load->view("inicio_de_sesion"); 
    }
    public function saveData(){
        $correo = $this->input->post("correo");
        $password = $this->input->post("password");
        
        
        $usuario = $this->crud2->verificarUsuario($correo, $password);
    
        
        $dataToSend = array();
        
        if ($usuario) {
            
            $dataToSend['status'] = "success";
            $dataToSend['message'] = "Inicio de sesión con éxito";
        
        } else {
            
            $dataToSend['status'] = "error";
            $dataToSend['message'] = "Correo electrónico o contraseña incorrectos";
        }
    
        echo json_encode($dataToSend, JSON_NUMERIC_CHECK);
    }
    
}
