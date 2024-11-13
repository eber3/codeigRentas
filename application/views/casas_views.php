<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url();?>public/css/menu.css">

</head>
<body>
<nav class="menu-nav">
    <div class="nav">
   <span class="logo"><img src="imagenes/logo2.jpg" height="50"></span>
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
    <li class="link"><a href="<?= site_url('Inicio'); ?>">Cerrar Sesion</a></li>
    
 
     </ul>
  </div>





</body>
<Script src="<?= base_url();?>public/jquery/jquery-3.7.1.min.js"></Script>
<script src="<?= base_url();?>public/js/menu.js"></script>
</html>