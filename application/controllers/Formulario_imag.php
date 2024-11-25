<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario_imag extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
            #cargar helper url
            $this->load->helper('url');
            $this->load-> model("crudFormulario");
    
        }

    
    public function index(){
        $this->load->view("formulario_views");

    }
    
   


    
}