<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
            #cargar helper url
            $this->load->helper('url');
            
            
        
        }
    
    public function index(){
        $this->load->view("formulario_views");

    }
}