# Bedingungen

- `if($boolean) {}` wird verwendet um das was zwischen den geschweiften Klammern nur auszuführen, wenn das was in den runden Klammern steht `true` ist

- auf diese `if` kann man eine gleiche Struktur verwenden, die `elseif($boolean) {}` wird nur ausgeführt, wenn das `if` davor nicht ausgelöst wurde und `$boolean` = `true` ist

- man kann mehrere `elseif`s hintereinander platzieren, jedoch muss ein `if` vorhanden sein.

- diese `elseif`s werden nur gecheckt, wenn die anderen Bedingungen vorher `false` sind

- zuletzt gibt es noch ein `else {}`, es wird verwendet um das was zwischen den geschweiften Klammern nur auszuführen, wenn alle Bedingungen davor falsch sind

- eine Bedingungskette aus den Dreien beginnt immer mit einem `if`

- nun kann ein `else` folgen, oder davor noch eine oder mehrere `elseif`s

### `switch` wenn man zu viele `elseif`s hat

- Manchmal muss man viele Werte mit `if` abfragen möchte, ist das sehr viel Geschreibe

- deshalb gibt es `switch($irgendwas) {}`

- `$irgendwas` ist die zu testende Variable

- ein `switch` beinhaltet `case $wert:` sehr häufig

- ein `case $wert` beschreibt, dass die Variable in den runden Klammern von `switch()` auf `$wert` getestet wird und wenn sie übereinstimmen wird das nach dem `case` ausgeführt

- bei den `case`s werden keine geschweiften Klammern benutzt!

- hier ist "Whitespace" also der Weißraum, also die Benutzung von Leerzeichen, Zeilenumbrüchen und Tabulatoren wichtig. Alles, was in einem `case` ausgeführt werden soll, muss einmal mit einem Tabulator eingerückt werden

- Wenn ein Wert bei `case` `true` ist, werden alle anderen `case`s auch ausgeführt, bis ein `break;` kommt

- `break` ist ein Jumpstatement, genauso wie `continue` aber das benutzt man in Schleifen (mehr dazu in "06. Schleifen")

- Wenn kein `case` anschlägt, kann man noch ein `default:` einbinden. Es funktioniert wie `else`
