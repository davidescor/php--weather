<?php

include_once("file.php");

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WorldWeather</title>

    <!-- BOOTSTRAP CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>

    <?php

    echo '<p align="center">';
    echo '<table class="fondoGrande">';
      echo '<tr><th colspan="5">'.$city[0].'</th></tr>';
      echo '<tr><td>';
        echo'<table class="fondo" align="center">'; 
          echo'<tr><th colspan="2">'.$Dia.'</th></tr>';
          echo '<tr>';
            echo '<td align="center">';
            echo '<img src="img/weather/color/'.$Simbolo.'.svg" alt="'.$Simbolo_desc.'" title="'.$Simbolo_desc.'"/><BR>'; 
            echo '</td>';
            echo '<td align="center">';
              echo  '<img src="img/wind/'.$Viento.'.png" alt="'.$Viento_desc.'" title="'.$Viento_desc.'"/><BR>';
            echo '</td>';
          echo '</tr>';
          echo '<tr><th colspan="2">Maxima '.$TempMax.'</th></tr>';
          echo '<tr><th colspan="2">Minima '.$TempMin.'</th></tr>';
        echo '</table>';
      echo '</td></tr>';
      echo '<tr><th align="center">';
      echo '</th></tr>';
    echo '</table>';
    echo '</p>';

    ?>


    <!-- BOOSTRAP JAVASCRIPT -->

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
