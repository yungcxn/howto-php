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

    //Addition
    echo 1 + 3;
    echo "<br>";
    echo 1.2 + 3.6;
    echo "<br>";

    //Subtraktion
    echo 1 - 3;
    echo "<br>";
    echo 1.2 - 3.6;
    echo "<br>";

    //Multiplikation
    echo 1 * 3;
    echo "<br>";
    echo 1.2 * 3.6;
    echo "<br>";

    //Division
    echo 1 / 3;
    echo "<br>";
    echo 1.2 / 3.6;
    echo "<br>";

    //Modulo
    echo 1 % 3;
    echo "<br>";
    echo 1.2 % 3.6;
    echo "<br>";

    //Potenzierung
    echo 1 ** 3;
    echo "<br>";
    echo 1.2 ** 3.6;
    echo "<br>";

    //Arithmetische Zuweisung
    $a = 5;
    $b = 4;
    $a += $b;
    echo $a;
    echo "<br>";

    //Vergleichsoperatoren
    $x = true;
    $y = false;

    echo $x == $y;
    echo "<br>";

    echo $x === $y;
    echo "<br>";

    echo $x != $y;
    echo "<br>";

    echo $x <> $y;
    echo "<br>";

    echo $x !== $y;
    echo "<br>";

    echo $x > $y;
    echo "<br>";

    echo $x < $y;
    echo "<br>";

    echo $x >= $y;
    echo "<br>";

    echo $x <= $y;
    echo "<br>";

    //Inkrement / Dekrement

    $c = 5;
    echo $c++;
    echo "<br>";
    echo $c--;
    echo "<br>";
    echo --$c;
    echo "<br>";
    echo ++$c;
    echo "<br>";

    // Logische Operatoren
    echo $x and $y;
    echo "<br>";

    echo $x or $y;
    echo "<br>";

    echo $x xor $y;
    echo "<br>";

    echo !$x;
    echo "<br>";

    //Strings

    echo "Hallo " . "TEST!";
    echo "<br>";

    //konditionale Zuweisungsoperatoren

    echo true ? "Zisch" : "Stuhl";
    echo "<br>";

    echo NULL ?? "Tisch";
    echo "<br>";

    ?>

    <p>Ciao</p>

  </body>
</html>
