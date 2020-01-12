# Operatoren

- Wie in Mathe, nur für verschiedenste Datentypen
- Operatoren haben Vorfahrtsregeln, Punkt vor Strich z.B.
- Diese Vorfahrtsregeln kann man mit Klammern `()` überschreiben
- hier eine Liste

### Arithmetische Operatoren

- `+` Addition: `$x + $y`
- `-` Subtraktion: `$x - $y`
- `*` Multiplikation: `$x * $y`
- `/` Division: `$x / $y` (Bei Integern keine Kommazahl als Lösung!)
- `%` Modulus: `$x % $y` (Gibt den Rest der beiden Zahlen)
- `**` Potenzierung: `$x ** $y`

### Arithmetische Zuweisung

- `$x += $y` ist das gleiche wie: `$x = $x + $y`
- `$x -= $y` ist das gleiche wie: `$x = $x - $y`
- `$x *= $y` ist das gleiche wie: `$x = $x * $y`
- `$x /= $y` ist das gleiche wie: `$x = $x / $y`
- `$x %= $y` ist das gleiche wie: `$x = $x % $y`

### Vergleichsoperatoren (Gibt einen Boolean zurück)

- `$x == $y` ist Gleich
- `$x === $y` ist Gleich und der Datentyp auch
- `$x != $y` ist NICHT Gleich
- `$x <> $y` wie `!=`
- `$x !== $y` ist nicht gleich oder der Datentyp auch nicht
- `$x > $y` ist Größer
- `$x < $y` ist Kleiner
- `$x >= $y` ist Größer oder Gleich
- `$x <= $y` ist Kleiner oder Gleich

### Inkrement / Dekrement

- `++$x` Erhöht `$x` um 1 und gibt den neuen Wert zurück
- `$x++` gibt den Wert zurück und erhöht danach `$x` um 1
- `--$x` Subtrahiert `$x` um 1 und gibt den neuen Wert zurück
- `$x--` gibt den Wert zurück und subtrahiert danach `$x` um 1

### Logische Operatoren

- `$x and $y` oder `$x && $y` ergibt `true` wenn beide Variablen `true` sind
- `$x or $y` oder `$x || $y` ergibt `true` wenn mindestens eine Variable `true` ist
- `$x xor $y` ergibt `true` wenn nur eine Variable `true` ist
- `!$x` ergibt `true` wenn `$x` `false` ist

### Stringverkettung

- `$x . $y` fügt zwei Strings aneinander
- `$x .= $y` ist wie `$x = $x . $y`

### konditionale Zuweisungsoperatoren

- `$a = $x ? $y : $z` sagt, dass `$a` = `$y` ist, wenn `$x` `true` ist, sonst ist `$a` = `$z`

- `$a = $x ?? $y` sagt, dass `$a` = `$x` ist, wenn `$x` nicht `NULL` ist, sonst ist `$a` = `$y`
