# Fehler und -behandlung

- Wenn man etwas falsch macht, das nicht an der Grammatik liegt (Also Schreibfehler oder Konstruktionen, die PHP nicht vorsieht), wird ein Fehler ausgegeben.

- Diese Fehler heißen "Exceptions" nicht "Errors", weil sie im Grunde genommen keine Fehler, sondern Ausnahmen sind, die man behandeln kann

- Wenn eine Ausnahme auselöst wird, spricht man von "Exception throwing" (Ausnahmenauswurf)

- Man kann eigene Ausnahmen als Klassen definieren und mit `throw new Klassenname;` aufrufen, dies ist aber noch nicht relevant (näheres später)

- Damit Code weiterläuft, bzw. einen Fehler erkennbar ausgibt, gibt es `try {} catch(Exception $exception) {}`

- Damit wird der Code in `try` auf eine Ausnahme geprüft und bei einem Auswurf des Fehlers der in den Klammern von `catch` steht wird der Codeblock danach ausgeführt

- Es können mehrere `catch`s aufeinanderfolgen, um mehrere Fehler abzudecken

- nach dem `catch` kann man noch einen `finally {}` Block benutzen, um bei einem Fehler unbedingt noch etwas ausführen zu müssen

- Das wird benutzt, um z.B. bei Datenbanken die Verbindung zu beenden
