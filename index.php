<?php

include_once("api.php");

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WORLD WEATHER</title>

    <!-- BOOTSTRAP CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>

<!-- menu -->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">
  <a class="navbar-brand" href="index.php">WORLDWEATHER</a>
  <button class="navbar-toggler bg-black" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="basicExampleNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">EL TIEMPO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">MAPAS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">SATÉLITES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">RADAR</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">NOTICIAS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">EL MUNDO</a>
      </li>
    </ul>
    <div class="form-inline">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
      </li>
    </ul>
    </div>
  </div>
</nav>
<!-- /menu -->


    <div class="row">

      <!-- tiempo dia -->
      <div class="col-md-12 bg-blue text-center" >
          <br>
          <p class="c-white f-size11 upcase">Inicio &rarr; Cataluña &rarr; Provincia de Lleida &rarr; Lleida</p>
          <p class="c-white f-size25">El Tiempo en Lleida</p>
          <img src="img/weather/white/1.svg" alt="img temp">
          <p class="c-white f-size15">16:25 Intervalos nubosos</p>
          <p class="c-white f-size25">19°/9°</p> 
      </div>
      <!-- /tiempo dia -->

      <div class="col-md-3 bg-blue">
      </div>

      <div class="col-md-6 bg-blue">
        <hr class="hr-white">
        <div class="row">

            <div class="col-md-1">
            </div>

            <!-- tiempo dia individual -->
            <div class="col-md-2 text-center bg-darkblue ptopup">
              <p class="c-white f-size20 upcase ">hoy</p>
              <img src="img/weather/white/4.svg" alt="img temp" width="64" height="64">
              <p class="c-white f-size15">23°/11°</p>
              <img src="img/wind/1.png" alt="img temp" class="bg-white-radius">
              <p class="c-white f-size15">13 km/h</p>

            </div>
           <div class="col-md-2 text-center ptopup">
              <p class="c-white f-size20 upcase">mañana</p>
              <img src="img/weather/white/14.svg" alt="img temp" width="64" height="64">
              <p class="c-white f-size15">22°/5°</p> 
              <img src="img/wind/4.png" alt="img temp" class="bg-white-radius">
              <p class="c-white f-size15">13 km/h</p>

            </div>
           <div class="col-md-2 text-center ptopup">
              <p class="c-white f-size20 upcase">MIERCOLES</p>
              <img src="img/weather/white/9.svg" alt="img temp" width="64" height="64">
              <p class="c-white f-size15">19°/9°</p> 
              <img src="img/wind/11.png" alt="img temp" class="bg-white-radius">
              <p class="c-white f-size15">13 km/h</p>

            </div>
           <div class="col-md-2 text-center ptopup">
              <p class="c-white f-size20 upcase">JUEVES</p>
              <img src="img/weather/white/21.svg" alt="img temp" width="64" height="64">
              <p class="c-white f-size15">27°/10°</p> 
              <img src="img/wind/14.png" alt="img temp" class="bg-white-radius">
              <p class="c-white f-size15">13 km/h</p>
            </div>
           <div class="col-md-2 text-center ptopup">
              <p class="c-white f-size20 upcase">VIERNES</p>
              <img src="img/weather/white/1.svg" alt="img temp" width="64" height="64" >
              <p class="c-white f-size15">32°/12°</p> 
              <img src="img/wind/32.png" alt="img temp" class="bg-white-radius">
              <p class="c-white f-size15">13 km/h</p>
            </div>
            <!-- /tiempo dia individual -->
            <div class="col-md-1">
            </div>
            <div class="col-md-12">
              <br>
            </div>

        </div>
      </div>

      <div class="col-md-3 bg-blue">
      </div>

      <div class="col-md-4">
      </div>

      <div class="col-md-4">
        <br>
        <!-- tiempo hora -->
        <p class="c-black f-size20">El Tiempo en Lleida</p>


        <hr class="hr-gray">
          <div class="row">
            <div class="col-md-3">
              <p class="f-size15">17:00</p>
            </div>
            <div class="col-md-2">
              <img src="img/weather/color/21.svg" alt="img temp" width="33" height="33" style="margin-top: -7px;">
            </div>
            <div class="col-md-4">
              <p class="f-size15 f-bold f-left">17°</p>
              <p class="f-size15 f-left p-left">Intervalos nubosos</p>
            </div>
            <div class="col-md-3">
              <img src="img/wind/32.png" alt="img temp" class="f-left">
              <p class="f-size15 f-left">13 km/h</p>
            </div>
           </div>
        <!-- /tiempo hora -->

      <div class="col-md-12">
        <footer class="text-center footer">
          <p class="c-white-footer f-size15">WORLD WEATHER © COPYRIGHT BY <a class="no-style" href="www.davidespier.com">DAVID ESPIER</a></p>
        </footer>
      </div>

   </div>


    <!-- BOOSTRAP JAVASCRIPT -->

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
