<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="registro.css">
  <link rel="stylesheet" href="src/css/Style.css">
  
  <title>Registro</title>
  
</head>
<body>
  <center>
  <header class="header" >
    

  <div class="container">
    <img src="imagenes/registro.jpg.png" alt="">
    
  <div class="formulario">
             <h1>Registrarse</h1>
    <label for="nombre">Usuario:</label>
    <input type="text"  id="nombre" autofocus placeholder="Usuario"><br></br>
    <label for="correo">Correo electronico</label>
    <input type="text"  id="correo" autofocus placeholder=" correo"><br></br>
    <label for="password">Contraseña</label>
    <input type="password"  id="password" autofocus placeholder="contraseña">
    <br></br>
   
    <button type="submit" onclick="enviarFormulario()">Registrarse</button><br></br>
    ¿Ya tienes una cuenta? <a href="<?= site_url('IniciarSesion'); ?>">Iniciar Sesion</a>
    
  
  </center>
</div>
</div>
</header>
</body>
<Script src="<?= base_url();?>public/jquery/jquery-3.7.1.min.js"></Script>
<script src="<?= base_url();?>public/js/registrarse.js"></script>
</html>
