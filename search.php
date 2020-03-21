<?php
  include_once("core/control/search/control.php");
  include_once("core/func/func.php");
  include_once("core/func/search/func.php");
?>

<html>

<head>
  <link rel="shortcut icon" href="core/design/img/favicon.ico" type="image/ico" />
  <link rel="apple-touch-icon" href="core/design/img/favicon.ico" type="image/ico" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="core/design/img/favicon.ico" type="image/ico">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="core/design/img/favicon.ico" type="image/ico">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="core/design/img/favicon.ico" type="image/ico">
  <link rel="apple-touch-icon-precomposed" href="core/design/img/favicon.ico" type="image/ico">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link href="core/design/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="core/design/css/style.css" rel="stylesheet">


  <title>EL TIEMPO - SEARCH</title>

</head>
<body>

  <nav class="navbar navbar-expand-md navbar-dark" id="bg-time-navbar">
    <a class="navbar-brand" href="index.php">EL TIEMPO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

     <div class="collapse navbar-collapse" id="navbarsExample04">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">INDEX<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">CONTACTO</a>
        </li>
      </ul>
    <form METHOD="POST" ACTION="search.php" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2 nav-link" type="search" placeholder="El tiempo en..." aria-label="Search" name="name" required>
      <div class="center-btn">
        <button class="btn btn-outline-success my-2 my-sm-0 nav-link" type="submit">BUSCAR</button>
      </div>
    </form>
    </div>
  </nav>

   <?php 
      controlDayNightSearch($localinfo,$background_day_color,$background_night_color,$time_day_control_min,$time_day_control_max,$background_navbar_day_color,$background_navbar_night_color);
    ?>

  <div class="row">
    <div class="container text-center">
      <br>
      <?php

      getSearch($id,$name_country_search,$nivel1,$nivel2,$nivel3,$max);
        
      ?>
      <div class="col-md-12">
        <footer class="footer text-center">
          <p class="f-size17 c-black">© EL TIEMPO 2020 </p><a class="no-style" href="http://www.davidespier.com">Created by davidespier.com</a>
        </footer>
      </div>

     </div>
    </div>

  <script src="core/design/core/vendor/jquery/jquery.min.js"></script>
  <script src="core/design/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
