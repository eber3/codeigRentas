<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <link rel="stylesheet" href="<?= base_url();?>public/css/iniciar.css">

</head>
<body>
    <header class="header" >
        <div class="container">
            <br></br>
            
            <img src="<?= base_url('public/imagenes/imagen2.png'); ?>"  class="imagen-header">


  <center>
    
  <h1>Iniciar Sesion</h1>
   <div class="inicio">
    <label for="correo">Correo:</label><br>
    <input class= "etiqueta" type="text"  id="correo" autofocus placeholder="Ingresa tu Correo">
<br></br>
    <label for="password">Contraseña:</label>
    <input type="password"  id="password" autofocus placeholder="Ingresa tu Contraseña"><br></br>
    ¿No tienes una cuenta aun? <a href="<?= site_url('Registro'); ?>">Registrarse</a>
    <br></br>
    <button type="button" name="boton"  onclick="acceder()">Iniciar Sesion</button>
    </div>

   
    
   
      </center> 
      
      </header>
</body>
<Script src="<?= base_url();?>public/jquery/jquery-3.7.1.min.js"></Script>
<script src="<?= base_url();?>public/js/iniciar_sesion.js"></script>
</html>