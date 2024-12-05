<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario_imag extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
            #cargar helper url
            $this->load->helper('url');
            
            $this->load-> model("crud3");
        
    
        }
       
    

 

    
    public function index(){
        $this->load->view("formulario_views");

    }
//funciones
public function Registro(){
    $ubicacion = $this->input->post("ubicacion");
    $precio = $this->input->post("precio");
    $caracteristicas = $this->input->post("caracteristicas");
    


    $config['upload_path'] = 'public/img';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['max_size'] = 2040;

    $this->load->library('upload', $config);

    if($this->upload->do_upload('imagen')){
        $upload = $this->upload->data();
        $image_path = 'public/img/' . $upload['file_name'];

        // Datos para la base de datos
        $data = [
            "image_path" => $image_path,
            "ubicacion" => $ubicacion,
            "precio" => $precio,
            "caracteristicas" => $caracteristicas
        ];

        // Llamada a la funcion registro
        $registroExitoso = $this->crud3->registro($data);
        if($registroExitoso){
            $idUser = $registroExitoso;  
            $dataTosend = array(
                "status" => "success",
                "message" => "Registro exitoso",
                "idUser" => $idUser
            );
            echo json_encode($dataTosend, JSON_NUMERIC_CHECK);
        } else {
            echo "Error al guardar en la BD";
        }
    } else {
        echo "Error al subir la imagen: " . $this->upload->display_errors();
    }
}


//tabla
public function tabla(){
    $this->load->view("casas_views");
}

public function getData(){
    $dataTosend = array();

    $dataTosend["users"]=$this->crud3->readData();
    $dataTosend["status"] = "success";

    echo json_encode($dataTosend, JSON_NUMERIC_CHECK);
}




}//class
   



    
