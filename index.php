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

    <title>EL TIEMPO</title>

    <!-- BOOTSTRAP CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>

<!-- menu -->

<!-- /menu -->


    <div class="row bg-img">

      <div class="col-md-12 text-center" >
        <nav class="navbar navbar-expand-lg navbar-dark primary-color bg-img">
          <a class="navbar-brand" href="index.php">EL TIEMPO</a>
          <button class="navbar-toggler f-right" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="basicExampleNav">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link upcase" href="provincias.php">PROVINCIAS</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>


      <!-- tiempo dia -->
      <div class="col-md-12 text-center" >
            <?php
                firstDay($dayWeather, $city, $localinfo, $dayWeatherDesc, $dayTempmin, $dayTempmax, $dayWind, $dayWindSymbol,$hour,$hourTemp);
            ?>
      </div>
      <!-- /tiempo dia -->

      <div class="col-md-3">
      </div>

      <div class="col-md-6">
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

      <div class="col-md-3">
      </div>

    </div>

    <div class="row">
      <div class="col-md-4">
      </div>

      <div class="col-md-4">
        <br>

        <!-- tiempo hora -->
        <?php
          hourHistory($hour,$hourTemp,$hourSymnbol,$hourWind,$hourWindSymbol,$hourSymnbolDesc,$city);
        ?>
      <div class="col-md-4">
      </div>
        <!-- /tiempo hora -->

      <div class="col-xs-12">
        <footer class="text-center footer">
          <p class="f-size15 c-black">EL TIEMPO © COPYRIGHT</p><a class="no-style" href="http://www.davidespier.com">DAVID ESPIER</a>
        </footer>
      </div>

   </div>


    <!-- BOOSTRAP JAVASCRIPT -->

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
