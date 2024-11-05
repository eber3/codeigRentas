<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url();?>public/css/styles.css">
    <link rel="stylesheet" href="<?= base_url();?>public/css/inicio.css">
    <link rel="stylesheet" href="<?= base_url();?>public/css/acomodo_botones.css">
    <link rel="stylesheet" href="<?= base_url();?>public/bootstrap/css/bootstrap.css">
    
    
    <title>Principal</title>
   
</head>
<body>
    <header class="header" >
    <div class="container">
        <br></br>
        <img src="<?= base_url('imagenes/imagen.png'); ?>" alt="" height="350">

    <center>
        
    <h1>Renta de Casas</h1> <br></br>
    <h1>Bienvenido</h1> 
    <div class="botones-container">    
    <form action="Registro.php" method="POST">
            <input type="submit" name="enviar" value="Crear Cuenta ">
            
               
    </form>
    
   <a  class="btn btn-primary"href= "<?= site_url('IniciarSesion'); ?>">Iniciar Sesion</a>
    
</div>
</div>
</header>
</center>
</body>
</html>