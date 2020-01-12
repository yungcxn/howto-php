<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title>Tutorial</title>
  </head>
  <body>
    <h1>PHP-Tutorial</h1>
    <p>Hallo</p>
    <?php

    if (true) {
      echo "Moin";
      echo "<br>";
    }

    if (false) {
      echo "Das hier wird nicht ausgeführt";
      echo "<br>";
    }

    $panda = "Peter";

    if ($panda == 'Peter') {
      echo "Peter war hier";
      echo "<br>";
    }

    $tisch = "Stuhl";

    if ($tisch == 'Tisch') {
      echo "Nummer 1";
      echo "<br>";
    }else {
      echo "Nummer 2";
      echo "<br>";
    }


    

    $farbe = "blau";

    if ($farbe == "rot") {
        echo "rot";
        echo "<br>";
    } elseif ($farbe == "gruen") {
        echo "gruen";
        echo "<br>";
    } elseif ($farbe == "blau") {
        echo "blau";
        echo "<br>";
    }else{
      echo "nichts davon";
      echo "<br>";
    }

    //ist das gleiche wie

    switch($farbe) {
      case "rot":
        echo "rot";
        echo "<br>";
        break;
      case "gruen":
        echo "gruen";
        echo "<br>";
        break;
      case "blau":
        echo "blau";
        echo "<br>";
        break;
      default:
        echo "nichts davon";
        echo "<br>";
        break;

    }

    ?>

    <p>Ciao</p>

  </body>
</html>
