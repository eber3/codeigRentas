<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="<?= base_url();?>public/css/menu.css">
    <link rel="stylesheet" href="<?= base_url();?>public/css/ima.css">
    <link rel="stylesheet" href="<?= base_url();?>public/css/formulario.css">
    <link rel="stylesheet" href="<?= base_url();?>public/css/s.css">


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
        <li class="link"><a href="<?= site_url('Inicio'); ?>" class="fixed-link">Cerrar Sesion</a></li> 
    </ul>
</div>


<center><h1>Llenar el formulario de acuerdo con los datos de tu casa</h1></center><br>

<div class="formulario">
    <form id="registroForm"  enctype="multipart/form-data">
        <!-- sección de formulario -->
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
        </table>


        <!-- sección de imagen -->
        <h1>Insertar imagen</h1>
        <input type="file" id="imagen" name="imagen" multiple accept="image/*" required>
        <div id="preview"></div><br>

        <button type="submit"  >Subir</button>
    
</div>
</form>


<script src="<?= base_url();?>public/jquery/jquery-3.7.1.min.js"></script>
<script src="<?= base_url();?>public/js/formulario.js"></script>
<script src="<?= base_url();?>public/js/menu.js"></script>
<script src="<?= base_url();?>public/js/borrarimagen.js"></script>
<script src="<?= base_url();?>public/js/subir.js"></script>

</body>
</html>
