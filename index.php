<?php


include_once("api.php");
include_once("model.php");


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
<nav class="navbar navbar-expand-lg navbar-dark primary-color bg-img">
  <a class="navbar-brand" href="index.php">WORLD WEATHER</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="basicExampleNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link upcase" href="index.php?ciudad=0">barcelona</a>
      </li>
      <li class="nav-item">
        <a class="nav-link upcase" href="index.php?ciudad=1">Lleida</a>
      </li>
      <li class="nav-item">
        <a class="nav-link upcase" href="index.php?ciudad=2">Madrid</a>
      </li>
      <li class="nav-item">
        <a class="nav-link upcase" href="index.php?ciudad=3">Sevilla</a>
      </li>
      <li class="nav-item">
        <a class="nav-link upcase" href="index.php?ciudad=4">Zaragoza</a>
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
      <div class="col-md-3 bg-img" >
      </div>
      <!-- tiempo dia -->
      <div class="col-md-6 bg-img text-center" >
            <?php
                firstDay($dayWeather, $city, $localinfo, $dayWeatherDesc, $dayTempmin, $dayTempmax, $dayWind, $dayWindSymbol);
            ?>
      </div>
      <div class="col-md-3 bg-img" >
      </div>
      <!-- /tiempo dia -->

      <div class="col-md-3 bg-img">
      </div>

      <div class="col-md-6 bg-img">
        <hr class="hr-white">
        <div class="row">

            <div class="col-md-1">
            </div>

            <!-- tiempo dia individual -->
              <?php
                dayHistory($day, $dayWeather, $city, $localinfo, $dayWeatherDesc, $dayTempmin, $dayTempmax, $dayWind, $dayWindSymbol);
              ?>


            <!-- /tiempo dia individual -->
            <div class="col-md-1">
            </div>
            <div class="col-md-12">
              <br>
            </div>

        </div>
      </div>

      <div class="col-md-3 bg-img">
      </div>

      <div class="col-md-4">
      </div>

      <div class="col-md-4">
        <br>
        <!-- tiempo hora -->
        <p class="c-black f-size20">El Tiempo en Lleida</p>

        <?php
          hourHistory($hour,$hourTemp,$hourSymnbol,$hourWind,$hourWindSymbol,$hourSymnbolDesc);
        ?>


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
