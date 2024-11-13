<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

  <center>
    
  <h1>Datos</h1>
  <p>Llenar el formulario de acuerdo con los datos de tu casa</p>
   <div class="formulario">
<table border>
    <label for="ubicacion">Ubicacion:</label>
    <input class= "etiqueta" type="text"  id="ubicacion" autofocus placeholder="Ingresa la ubicacion de tu casa">
<br></br>
    <label for="precio">Precio:</label>
    <input type="precio"  id="precio" autofocus placeholder="Ingresa el precio de tu casa">
<br></br>
    <label for="caracteristicas">Caracteristicas Principales:</label>
    <input type="caracteristicas"  id="caracteristicas" autofocus placeholder="Ingresa las caracteristicas principales (datos adicionales)">
<br></br>
</table>






    <button type="button" name="boton"  onclick="subir()">Subir</button>
    </div>
</center>
</body>
<Script src="<?= base_url();?>public/jquery/jquery-3.7.1.min.js"></Script>
<script src="<?= base_url();?>public/js/formulario.js"></script>

</html>