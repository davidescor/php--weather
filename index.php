<?php

include_once("model.php");

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/ico" />
    <link rel="apple-touch-icon" href="img/favicon.ico" type="image/ico" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon.ico" type="image/ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/favicon.ico" type="image/ico">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon.ico" type="image/ico">
    <link rel="apple-touch-icon-precomposed" href="img/favicon.ico" type="image/ico">
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

    <!-- DIV IS CREATED IN CONTROL DAYNIGHT -->
      <?php 
        controlDayNigth()
      ?>

      <div class="col-md-12 text-center">
            <?php
                firstDay($dayWeather, $city, $localinfo, $dayWeatherDesc, $dayTempmin, $dayTempmax, $dayWind, $dayWindSymbol,$hour,$hourTemp);
            ?>
      </div>

      <div class="col-md-3">
      </div>

      <div class="col-md-6 text-center">
        <hr class="hr-white">
        <div class="row">
          <?php
            dayHistory($day, $dayWeather, $city, $localinfo, $dayWeatherDesc, $dayTempmin, $dayTempmax, $dayWind, $dayWindSymbol);
          ?>
        </div>
      </div>

    <!-- DIV IS CREATED IN CONTROL DAYNIGHT -->
    </div>
    <!-- /DIV IS CREATED IN CONTROL DAYNIGHT -->

    <div class="row">
      <div class="container">
        <div class="col-md-12 text-center">
          <!-- tiempo hora -->
          <?php
            hourHistory($hour,$hourTemp,$hourSymnbol,$hourWind,$hourWindSymbol,$hourSymnbolDesc,$city);
          ?>
          <!-- /tiempo hora -->

        <div class="col-md-12">
          <footer class="text-center footer">
            <p class="f-size17 c-black">El tiempo © copyright</p><a class="no-style" href="http://www.davidespier.com">davidespier.com</a>
          </footer>
        </div>
       </div>
      </div>
     </div>


    <!-- BOOSTRAP JAVASCRIPT -->

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
