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

    try {

    //Code, der eine Ausnahme auslöst

    } catch (Exception $exception) {

        // Code der ausgeführt wird, wenn eine Exception ausgelöst wird

    }

    finally {

      // Code, der so oder so ausgeführt wird

    }

    //Exception fängt jede Ausnahme ab, man kann aber auch bestimmte Fehler abfangen

    //Hier ein Fehler:
    $x = "Hallo";
    $x = 5;

    ?>

    <p>Ciao</p>

  </body>
</html>
