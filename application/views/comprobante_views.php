<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobante</title>
    
    <link rel="stylesheet" href="<?= base_url();?>public/css/menu.css">
    <link rel="stylesheet" href="<?= base_url();?>public/css/comprobante.css">
    


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
</div>
    </ul>
    <center>
    <p>¡Bienvenido a nuestra plataforma de renta de casas! Estamos encantados de que hayas encontrado la casa perfecta para ti. Ahora que has completado el proceso de alquiler en línea, es importante que sigas estos pasos para finalizar tu registro y asegurar una experiencia de alquiler sin problemas: <br></br>

        Dirígete a nuestra oficina central:
        Te invitamos a visitar nuestra oficina central ubicada en [Dirección], donde podrás completar tu registro de manera presencial. Nuestro equipo estará encantado de ayudarte y responder cualquier pregunta que tengas sobre tu alquiler. <br></br>
        
        Descarga y completa el comprobante de registro:
        Antes de visitar nuestra oficina, asegúrate de descargar el comprobante de registro . Este comprobante contiene campos importantes que necesitamos que completes con tus datos personales. Puedes encontrar el comprobante en la parte baja de esta pagina.. <br></br>

        
        Imprime el comprobante lleno:
        Después de completar el comprobante, imprímelo en papel tamaño carta. Asegúrate de que la impresión sea clara y legible para evitar cualquier error en el proceso de registro. <br></br>
        
        Visítanos en nuestra oficina:
        Una vez que hayas llenado y firmado el comprobante de registro, tráelo contigo a nuestra oficina central. Nuestro personal estará disponible para recibirte y revisar la documentación necesaria.<br></br>
        
        Finaliza tu registro:
        Una vez en nuestra oficina, se te guiará a través del proceso de registro final y se te proporcionará cualquier información adicional que necesites para comenzar tu estadía en tu nueva casa.<br></br>
        
        ¡Y eso es todo! Siguiendo estos simples pasos, estarás un paso más cerca de disfrutar de tu nuevo hogar. Si tienes alguna pregunta o necesitas ayuda adicional, no dudes en contactarnos (+52 466 115 9820)---celayaRentas@gmail.com. Estamos aquí para ayudarte en cada paso del camino.<br></br>
        
        <span><img src="imagenes/comprobante.jpg.png" height="300"></span><br></br>
        <a download="Comprobante" href="<?= base_url('public/files/Comprobante de Renta (1).pdf'); ?>"> Descargar Comprobante </a>

        
    </p>
</center>
<script src="<?= base_url();?>public/js/menu.js"></script>

</body>
</html>