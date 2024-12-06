<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casas</title>
    <link rel="stylesheet" href="<?= base_url();?>public/css/menu.css">
    <link rel="stylesheet" href="<?= base_url();?>public/css/s.css">
    <link rel="stylesheet" href="<?= base_url();?>public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url();?>public/css/tabla.css">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>




</head>
<body>
    <header>
        <img src="<?= base_url();?>public/imagenes/casita.png" alt="Logo" class="logo">
    </header>
    

<nav class="menu-nav">
    <div class="nav">
  
   <h1 class="titulo"></h1>
 
     <div class="menu">
 <span class="bar"></span>
 <span class="bar"></span>
 <span class="bar"></span>
 
 </div>
 </div>
  </nav>
 

  
  <div class="menu_desplegable">
     <ul class="nav_link"> 
    <li class="link"><a href="<?= site_url('Inicio'); ?>" class="fixed-link">Cerrar Sesion</a></li> </ul>
</div>

  <div class="s">
<a href="<?= site_url('Formulario_imag'); ?>">Poner en Renta</a>
    
</div>



<div class="p-3 table-responsive">
  <table  class="table table-hover table-striped" >
    <thead class="bg-dark text-white">
      <tr>
        <th></th>
        <th scope="col">imagen</th>
        <th scope="col">ubicacion</th>
        <th scope="col">precio</th>
        <th scope="col">caracteristicas</th>
       
        
      </tr>
    </thead>
    <tbody id="cuerpoT">
      
      <!-- Aquí se llenarán las filas dinámicamente con JavaScript -->
    </tbody>
  </table>
</div>






<Script src="<?= base_url();?>public/jquery/jquery-3.7.1.min.js"></Script>
<script src="<?= base_url();?>public/js/menu.js"></script>
<script src="<?= base_url();?>public/js/obtenerdatos.js"></script>
</body>
</html>