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

    include 'inc.php';

    //früher: include("inc.php");

    //require "inc.php"; um einen Fehler auszuwerfen, wenn die Datei nicht gefunden wurde

    //require_once "inc.php"; Um vor weiteren Includes zu schützen

    ?>

    <p>Ciao</p>

  </body>
</html>
