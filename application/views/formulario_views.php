<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="<?= base_url();?>public/css/menu.css">
    <link rel="stylesheet" href="<?= base_url();?>public/css/ima.css">

    
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



  
    
  <h1>Datos</h1> 
  <p>Llenar el formulario de acuerdo con los datos de tu casa</p><br>
   <div class="formulario">
<table border>
    <label for="ubicacion">Ubicacion:</label>
    <input class= "etiqueta" type="text"  id="ubicacion" autofocus placeholder="Ingresa la ubicacion de tu casa">
<br></br>
    <label for="precio">Precio:</label>
    <input type="text"  id="precio" autofocus placeholder="Ingresa el precio de tu casa">
<br></br>
    <label for="caracteristicas">Caracteristicas Principales:</label>
    <input type="text"  id="caracteristicas" autofocus placeholder="Ingresa las caracteristicas principales (datos adicionales)">
<br></br>
</table>

<h1>Imagenes</h1> 
<input type="file" id="imageInput" multiple accept="image/*">
    
    <div id="preview"></div>







    <button type="button" name="boton"  onclick="subir()">Subir</button>
    </div>

</body>
<Script src="<?= base_url();?>public/jquery/jquery-3.7.1.min.js"></Script>
<script src="<?= base_url();?>public/js/formulario.js"></script>
<script src="<?= base_url();?>public/js/menu.js"></script>
<script src="<?= base_url();?>public/js/imagenes.js"></script>


</html>