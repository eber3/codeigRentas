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
    <link rel="stylesheet" href="<?= base_url();?>public/css/formulario.css">

    
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
 <center><p><h1>Llenar el formulario de acuerdo con los datos de tu casa</h1></p><br></center>

<div class="formulario">
    <form>
        <table>
            <tr>
                <td><label for="ubicacion">Ubicación:</label></td>
                <td><input class="etiqueta" type="text" id="ubicacion" autofocus placeholder="Ingresa la ubicación de tu casa"></td>
            </tr>
            <tr>
                <td><label for="precio">Precio:</label></td>
                <td><input type="text" id="precio" autofocus placeholder="Ingresa el precio de tu casa"></td>
            </tr>
            <tr>
                <td><label for="caracteristicas">Características Principales:</label></td>
                <td><input type="text" id="caracteristicas" autofocus placeholder="Ingresa las características principales (datos adicionales)"></td>
            </tr>
        </table>

        <h1>Imágenes</h1>
        <input type="file" id="imageInput" multiple accept="image/*">

        <div id="preview"></div>

        <button type="button" name="boton" onclick="subir()">Subir</button>
    </form>
</div>

<script>

    document.getElementById('imageInput').addEventListener('change', function (e) {
        const previewContainer = document.getElementById('preview');
        previewContainer.innerHTML = '';  

        const files = e.target.files;
        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            const reader = new FileReader();
            reader.onload = function (event) {
                const imagePreview = document.createElement('div');
                imagePreview.classList.add('image-preview');
                imagePreview.innerHTML = `<img src="${event.target.result}" alt="Vista previa">`;
                previewContainer.appendChild(imagePreview);
            };
            reader.readAsDataURL(file);
        }
    });

    
    function subir() {
        alert('Imágenes y datos subidos correctamente.');
    }
</script>

</body>
<script src="<?= base_url();?>public/jquery/jquery-3.7.1.min.js"></script>
<script src="<?= base_url();?>public/js/formulario.js"></script>
<script src="<?= base_url();?>public/js/menu.js"></script>
<script src="<?= base_url();?>public/js/imagenes.js"></script>

</html>