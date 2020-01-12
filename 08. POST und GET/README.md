# POST und GET

- `$_GET` und `$_POST` sind Arrays

- Vorgenerierte Variablen: Sie gibt es schon ohne dass wir sie definieren

- `$_GET` beinhaltet Werte in der URL: `test.php?vorname=Max&nachname=Meier`

- hier ist `$_GET["vorname"]` "Max" und `$_GET["nachname"]` "Meier"

- Die Weitergabe von Werten in die URL wird bei z.B. Eingabeflächen oder Abfragen vom Seitennutzer genutzt um sie zu Speichern und an PHP weiterzuleiten

- POST ist wie GET, aber ohne URL, da sieht man nichts.

- POST speichert alle Werte einer Form, in der man auf einen `submit` Knopf drückt oder generell eine `<form>` abschickt

- So können wir z.B. unsere Umfragen an PHP weiterleiten und in einer Datenbank speichern

- Genau wie `$_GET` mit `["vorname"]`...
