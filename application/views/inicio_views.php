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
    

    
    
    
    <title>Principal</title>
   
</head>
<body>
    <header class="header" >
    <div class="container">
        <br>
        
        <br></br>
        
    <center>
        
    <h1>Renta de Casas</h1> <br></br>
    <h1>Bienvenido</h1> 
    <div class="botones">    
    <a  href= "<?= site_url('Registro'); ?>">Registrarse</a>
    
   <a href= "<?= site_url('IniciarSesion'); ?>">Iniciar Sesion</a>
    
</div>
</div>
</header>
</center>
</body>
</html>