# Datentypen

- Ein Wert den man einer Variable z.B. gibt hat einen Typ
- Eine Variable, der man einen gewissen Datentypen zugewiesen hat kann nur durch "type casting" einen neuen Datentypen erhalten
- Hier sind alle derzeitigen Typen:

### Integer
- Ein Interger (kurz int) ist eine Ganzzahl
- Vor sie kann man + und - benutzen (positive und negative Zahl)
- Sie kann auch andere Zahlensysteme benutzen
- `0b10101010` für binär
- `0x123456789abcdef` für hexadezimal
- `01234` für Oktal

### String
- Besteht aus Zeichen
- der String beginnt mit einem `"` und endet mit `"`
- Wenn man Strings aneinanderkettet benutzt man ein `.` dazwischen
- Ein String kann Zeichen nach UTF-8 beinhalten

### Floats und Doubles
- Gleitkommazahlen
- Der `.` ist im Deutschen das Komma
- Wissenschaftliche Schreibweise möglich `4E-10`, `10.2e3`

### Booleans
- Wie ein Schalter
- entweder `true` oder `false`

### Arrays
- Eine Liste mit einer festen Länge, die mehrere Werte beinhaltet
- erstellt man mit `$arr = array("Wert1", "Wert2", "Wert3")`
- Man greift auf einen Wert des Arrays mit `$arr[indexzahl]` zu, wobei `indexzahl` mit 0 der erste Wert ist und der letzte hier 2
- Ein Array beginnt immer mit dem Index 0!

### Objekte
- Eine Instanz einer Klasse
- Später mehr

### Resources
- Spezieller Typ
- Die Variable dahinter hält eine besondere Verbindung, wie zu Datenbanken oder Dateien.

### NULL
- ist kein richtiger Datentyp
- zeigt einfach nur an, dass die Variable keinen Wert hat
