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

</body>
<Script src="<?= base_url();?>public/jquery/jquery-3.7.1.min.js"></Script>
<script src="<?= base_url();?>public/js/menu.js"></script>
</html>