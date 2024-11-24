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


<center><h1>Llenar el formulario de acuerdo con los datos de tu casa</h1></center><br>

<div class="formulario">
    
    <form action="<?= site_url('Casas'); ?>" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="ubicacion">Ubicación:</label></td>
                <td><input class="etiqueta" type="text" name="ubicacion" id="ubicacion" placeholder="Ingresa la ubicación de tu casa" required></td>
            </tr>
            <tr>
                <td><label for="precio">Precio:</label></td>
                <td><input type="text" name="precio" id="precio" placeholder="Ingresa el precio de tu casa" required></td>
            </tr>
            <tr>
                <td><label for="caracteristicas">Características Principales:</label></td>
                <td><input type="text" name="caracteristicas" id="caracteristicas" placeholder="Ingresa las características principales (datos adicionales)" required></td>
            </tr>
        

        <h1>Insertar imagen</h1>
        <input type="file" id="imagen" name="imagen" multiple accept="image/*" required>
        <div id="preview"></div>

        
        <button type="submit" name="boton"  onclick="subir()">Subir</button>
    </form>
</div>

</body>
<script src="<?= base_url();?>public/jquery/jquery-3.7.1.min.js"></script>
<script src="<?= base_url();?>public/js/formulario.js"></script>
<script src="<?= base_url();?>public/js/menu.js"></script>
<script src="<?= base_url();?>public/js/imagenes.js"></script>
<script src="<?= base_url();?>public/js/visualizarimagenes.js"></script>
<script src="<?= base_url();?>public/js/subir.js"></script>

</html>
