# Funktionen und Closures

- Wie in Mathe, nur für veschiedenste Datentypen
- Funktionen sind das, was wirklich etwas macht.
- bsp. `echo` ist eine Funktion, aber ohne `()`


```php
function abc($arg, $x, $y) {
 
 //Hier ist Code
 
 echo "Hallo"; //Auch eine Funktion, aber eine schon von PHP implementierte
 
 //Hier kann noch ein
 //return;
}
```

- Funktion beginnt mit `function` und trägt einen Namen, der die Funktion beschreibt
- hier `abc`

- In den runden Klammen können sich so viele Argumente / Parameter befinden wie möglich
- Wie in Mathe das f(x)
- Mit diesen Variablen macht man alles, was man mit Variablen beim Funktionsaufruf machen möchte
- Funktionsausruf = `abc($var1, $var2, $var3);`
- Diese Variablen sind nun keine Platzhalter
- Nun wird alles ausgeführt, mit den neu eingesetzten Variablen

- Bei den Parametern / Argumenten ist auf die Variablen zu achten. Wenn man als Argument einer Variable, mit der man Berechnungen durchführt, einen String bsp. nimmt, kann es zu Fehlern kommen -> Immer kommentieren!

- Ein Parameter / Argument kann einen Default-Wert haben
- Diese Argumente müssen nicht genannt werden, da wenn dieser Platz in der Funktion leer bleibt, die Definition in der Funktion selbst einsetzt:

`function bla($default = "hallo") {}`

- Diese Funktion kann man zweimal aufrufen:
- `bla("Ciao");
- `bla();`

- Eine Funktion kann ein `return;` Statement beinhalten
- Bei `return;` wird die Funktion verlassen, alles danach wird nicht mehr ausgeführt
- Außer man packt `return;` in eine Bedingung, dann wird natürlich nur bei Erfüllung der Bedingung das `return ausgeführt`

- Die Funktion kann aber einen Wert wiedergeben ("returnen"), also mit `return (wert);`
- Dieser Wert kann alles sein, eine Zahl, eine weitere Funktion, die wieder was zurückgibt, oder Datentypen, also Sonstiges
- Diesen zurückgegebenen Wert kann man einer Variable zuweisen:

`$wert = xy();`

- Funktionen müssen erst definiert werden, bevor sie aufgerufen werden
- Man kann eine Funktion in eine Funktion packen, die dann erst als vollwertige Funktion gilt, wenn die ummantelnde Funktion aufgerufen wurde ("Closures")
- Closures sind Funktionen in Funktionen

- Man kann auch bedingte Funktionen kreiren
- Dabei wird die Funktion in einer Bedingung definiert

- Man kann in Funktionen natürlich andere Funktionen ausführen, dabei auch die eigene Funktion
- Rekursive Funktionen benutzen die eigene Funktion um bsp. Zahlenfolgen zu berechnen

- "Language constructs" sind vordefinierte Funktionen, quasi wie POST und GET, aber nur mit Funktionen

- "echo", "print", "include" und "require" sind besondere Funktionen ohne Klammern

- Variabelfunktionen sind an sich Stringvariablen mit dem Namen einer bereits definierten Funktion
- Mit runden Klammern hinter dem Variabelzeichen und dem Variabelnamen `$abc();` und ggf. noch Argumenten / Parameternn kann man diese Funktion dann aufrufen
