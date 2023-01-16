<!DOCTYPE html>
<html>
<head>
  <title>Èric Vega Noguera</title>
  <link rel="icon" type="image/x-icon" href="./favicon.ico">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="./styles.css"> 
  <!--<link rel="stylesheet" href="./w3.css">-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>PRINCIPAL</p>    
  </a>
  <a href="#acercademi" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ACERCA DE MI</p>
  </a>
  <a href="#curriculum" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>CURRICULUM</p>
  </a>
  <a href="#proyectos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-bars w3-xxlarge"></i>
    <p>PROYECTOS</p>
  </a>
  <a href="#contacto" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACTO</p>
  </a>
</nav>

<!-- Navbar on small screens / Mobile Screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-opacity w3-hover-opacity-off w3-black w3-center">
    <a href="#" class="w3-bar-item w3-button" style="width:20%; font-size:8px;">PRINCIPAL</a>
    <a href="#acercademi" class="w3-bar-item w3-button" style="width:20%; font-size:8px;">ACERCA DE MI</a>
    <a href="#curriculum" class="w3-bar-item w3-button" style="width:20%; font-size:8px;">CURRICULUM</a>
    <a href="#proyectos" class="w3-bar-item w3-button" style="width:20%; font-size:8px;">PROYECTOS</a>
    <a href="#contacto" class="w3-bar-item w3-button" style="width:20%; font-size:8px;">CONTACTO</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small"></span> Èric Vega Noguera</h1>
    <h2>Programador Front-End</h2>
    <img src="fotoCara.png" alt="cara" class="w3-image" width="auto" height="auto">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-light-grey w3-padding-64" id="acercademi">
    <h2 class="w3-text-white">Acerca de mi</h2>
    <hr style="width:200px" class="w3-opacity" >
    <h4>Soy una persona proactiva con ganas de entrar en el sector y demostrar mis habilidades, soy creativo, innovador y estoy muy motivado. 
        Actualmente, busco trabajo donde poder desarrollar los conocimientos que estoy obteniendo en Bootcamp con el objetivo de mantener un crecimiento continuo en mi vida laboral.
    </h4>
    <h3 class="w3-padding-16 w3-text-light-grey">Mis habilidades</h3>
    <p class="w3-wide">HTML</p>
    <div class="w3-white">
      <div class="w3-blue" style="height:28px;width:60%"></div>
    </div>
    <p class="w3-wide">CSS</p>
    <div class="w3-white">
      <div class="w3-blue" style="height:28px;width:65%"></div>
    </div>
    <p class="w3-wide">JAVASCRIPT</p>
    <div class="w3-white">
      <div class="w3-blue" style="height:28px;width:80%"></div>
    </div>
  </div>
  
  <!-- Portfolio Section -->
  <div class="w3-content w3-justify w3-padding-64" id="curriculum">
    <h2 class="w3-text-light-grey">Curriculum</h2>
    <hr style="width:200px" class="w3-opacity">
    <!--<object data="./CVEricVega.pdf" width="100%" height="1370"></object>-->
    <object data="./CVEricVega.pdf" type="application/pdf" frameborder="0" width="100%" height="1400" >
        <p>No se puede mostrar el archivo PDF en este navegador. <a href="./CVEricVega.pdf">Descargar el archivo PDF</a>.</p>
        <!--<embed src="https://drive.google.com/file/d/1rLyNQVAipTtdcH-PvxJ_CzwQJef5U4x2/view" width="100%" height="600px"/> -->
    </object>
  <!-- End Portfolio Section -->
  </div>

  <div class="w3-padding-64 w3-content" id="proyectos">
    <h2 class="w3-text-light-grey">Mis proyectos</h2>
    <hr style="width: 200px;" class="w3-opacity">

    <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half">
          <p><a href="#">Página personal</a></p>
          <p><a href="./CalendarioLaboral/calendariolaboral.html">Calendario laboral (En proceso)</a></p>
        </div>
        <div class="w3-half">
          
        </div>
      <!-- End photo grid -->
      </div>
  </div>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contacto">
    <h2 class="w3-text-light-grey">Contacto</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>Manresa, Barcelona, Spain</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Telefono: +34657597759</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: ericveganoguera@gmail.com</p>
    </div><br>
    <p>También puedes enviarme un mensaje:</p>

    <form method="POST">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Nombre" required="" name="name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Asunto" required="" name="asunto"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required="" name="email"></p>
      <p><textarea class="w3-input w3-padding-16" placeholder="Mensaje" required="" name="message" ></textarea></p>
      <p>
        <input class="w3-button w3-light-grey" type="submit" value="Enviar" name="enviar">
      </p>
    </form>
    <?php
      include("subscriberform.php")
    ?>
  <!-- End Contact Section -->
  </div>


<!-- END PAGE CONTENT -->
</div>

</body>
</html>
