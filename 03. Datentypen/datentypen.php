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
    // Integer
    $a = 123; // dezimal
    echo $a;
    echo "<br>";

    $b = -123; // negativ
    echo $b;
    echo "<br>";

    $c = 0x1A; // hexadezimal
    echo $c;
    echo "<br>";

    $d = 0123; // oktal
    echo $d;

    //Strings
    $a = 'Hello world!';
    echo "<br>";
    echo $a;
    echo "<br>";

    //Floats
    $a = 1.234;
    echo $a;

    echo "<br>";

    $b = 10.2e3;
    echo $b;
    echo "<br>";

    $c = 4E-10;
    echo $c;
    echo "<br>";

    //boolean
    $show_error = true;
    echo $show_error;
    echo "<br>";

    //arrays
    $colors = array("Red", "Green", "Blue");
    echo $colors[1];
    echo "<br>";

    $color_codes = array(
        "Red" => "#ff0000",
        "Green" => "#00ff00",
        "Blue" => "#0000ff"
    );
    echo $color_codes["Red"];

    //null
    $a = NULL;
    echo $a;
    echo "<br>";

    $b = "Hello World!";
    $b = NULL;
    echo $b;

//php teil kopiert von: https://www.tutorialrepublic.com/php-tutorial/php-data-types.php
    ?>

    <p>Ciao</p>

  </body>
</html>
