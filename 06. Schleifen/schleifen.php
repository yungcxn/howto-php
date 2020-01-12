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

    $pandas = 0;

    while ($pandas < 50) {

        echo "{$pandas} Pandas sterben aus";
        echo "<br>";

        $pandas++;
        //hier könnte man einfach ein
        //break;
        //verwenden, um aufzuhören, oder ein
        //continue;
        //überspringt den Rest der Schleife und mach weiter
    }


    for ($i = 0; $i < 50; $i++) {
      echo "Hallo Nummer {$i}";
      echo "<br>";
    }

    $arrayyy = ['Da', '_', 'Babbit'];

    foreach ($arrayyy as $name) {
        echo "Du siehst wie {$name} aus!\n";
        echo "<br>";
    }

    $andresarray = [
    'reteP'     => 'Peter',
    'reteM'    => 'Meter',
    'retärreV'     => 'Verräter'
    ];

    foreach ($andresarray as $vorn => $hinten) {
        echo "Hallo Mister {$vorn} {$hinten}";
        echo "<br>";
    }

    ?>

    <p>Ciao</p>

  </body>
</html>
