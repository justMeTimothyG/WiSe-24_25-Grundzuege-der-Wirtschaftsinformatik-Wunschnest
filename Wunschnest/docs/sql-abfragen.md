# SQL Abfragen

SQL ist die Sprache, um mit der Datenbank zu interagieren. Damit wir die Daten auslesen, schreiben und ändern können müssen wir mit der Datenbank (hier MySQL) interagieren. Dies tun wir mit SQL abfragen.

Die Abfragen, teile ich hier nach Thema bzw. Tabelle ein. Alle abfragen sind jedem Controller zugeordnet, der die Abfragen tatsächlich in unserem Projekt durchführt.

## Benutzer

Benutzer bezogen müssen wir erstmal Nutzer auslesen und neue Anlegen können. geändert wird in der Regel weniger.

### Alle Nutzer abfragen

```sql
SELECT * -- Wähle Alle Datenpunkte
FROM users -- aus der "users" Tabelle
```

Diese Abfragen wählt alle Datenpunkte `*` aus der `users` Tabelle. sehr simpel.

### Einzelnen Nutzer abfragen

```sql
SELECT *
FROM users
WHERE user_id = <user_id>
```

Diese Abfrage fählt alle Datenpunkte (`*`) aus der `users` tabelle und wählt nur die Zeilen aus wo die `user_id` der gelieferten `<user_id>` entspricht. ohne die dritte Zeile würde die Abfrage alle Nutzereinträge zurückgeben. Hier nochmal kommentiert

```sql
SELECT * -- Alle Datenpunkte
FROM users -- aus der "users" Tabelle
WHERE user_id = <user_id> -- "Wo die user_id der angegeben user id entspricht.
```

Diese Abfrage geht nach der ID. Natürlich loggen sich die leute mit dem Nutzernamen oder der Email adresse ein. Da die Email und Kennung `Unique` also einzigartig ist, kann ich auch danach filtern, um nur ein Ergebnis zu liefern

```sql
SELECT *
FROM users
WHERE email = "<abgefragte_email>"
```

Oder nach Kennung

```sql
SELECT *
FROM users
WHERE kennung = "<abgefragte_kennung>"
```

Ich kann aber auch beide Abfragen in einer kombinieren. Somit hätte ich dann nur eine Abfrage

```sql
SELECT *
FROM users
WHERE kennung = "<abfrage>" OR username = "<abfrage>"
```

Dies hat den Vorteil, dass ich entweder das eine oder das andere liefern kann und kriege auch ein Ergebnis. natürlich kann es passieren, dass eine Email als Nutzername benutzt wird. Um das zu verhindern sollte das Zeichen `@` im Nutzernamen verboten werden, da dies Zwangsweise benötigt wird für eine Email.

### Einen Neuen Nutzer Registrieren

Das ist zunächst die erste Funktion, die wir benötigen. Hier muss ein Nutzer erstellt werden, mit allen zwingend notwendigen Daten. Die SQL Abfrage könnte so aussehen.

```sql
INSERT INTO users (name, username, email, password_hash)
VALUES (:name, :username, :email, :password_hash)
```

Die Abfrage beginnt zunächst mal mit `INSERT INTO :tabelle`. Dies signalisiert einfach, dass du Daten in die `:tablle` einfügen möchtest. in der Klammer danach gibst du an, welche Spalten/Datensätze du einfügen möchtest. Dies müssen also genau den Beschriftungen der Tabelle entsprechen.

Danach kommt `VALUES (...)` dies signalisiert, dass danach einfach Datepunkte kommen. Technisch kannst du mehr als einen Datensatz hinzufügen, die mit einem `,` getrennt werden. also `VALUES (...), (...), (...);`.

Hier muss man nur achten, dass man auf die Reihenfolge achtet!

### Daten aktualisieren

Manchmal müssen wir die Daten eines Nutzers aktualisieren. Hier wird die häufigste Aufgabe sein das Datum des letzten Logins zu aktualisieren. Die Abfrage könnte so aussehen.

```sql
UPDATE users
SET last_login_at = NOW()
WHERE user_id = :user_id
```

Hier fangen wir mit einem Stichwort `UPDATE` an, dass dementsprechend eine aktualisierung eines Datensatzes signalisiert. Danach müssen wir nur noch die Tabelle angeben bei der die Datenstätze aktualisiert werden sollen.

Danach folgt `SET` wo wir bestimmen welcher Satensatz aktualisiert werden soll. Alternativ auch mehrere mit `,` separiert, wo man die zu aktualisierenden Spalten angeben muss mit seinem neuen Wert mit `=` bestimmt.

Zuletzt müssen wir mit `WHERE` filtern, damit wir nur die Datensätze aktualisiert die aktualisiert werden sollen. Wählt man anhand einer einzigartigen Spalte wird nur ein Datensatz betroffen sein. Aber wenn du nicht nach etwas einzigaritgem filterst aktualisiert du mehrere Datensätze mit dem Inhalt den du einfügen willst. Hier muss man vorsichtig sein!

Alternative Abfrage könnte auch sein:

```sql
UPDATE users
SET
    session_token = :session,
    sessions_token_expiration = :sessions_token_expiration,
    last_login_at = :last_login_at
WHERE user_id = :user_id
```

## Wunschlisten

Wunschlisten sind Datentechnisch sehr interessant, weil sie sowohl mit Nutzern als auch anderen Wünschen gekoppelt sind. Denn ein Nutzer kann Wunschlisten haben, aber eine Wunschliste hat auch Wünsche.

### Wunschlisten abfragen

```sql
SELECT *
FROM wishlist
WHERE wishlist_id = :wishlist_id
```

Dies ist sehr ähnlich wie oben bei den Nutzern. Eine Normale Standard abfrage.

### Anzahl an Wünsche für eine Wunschliste abfragen

Wichtig ist ja auch nochmal anzuzeigen, wie viele Wünsche eine Liste hat. Das kann wie folgt abgefragt werden.

```sql
SELECT
    COUNT(*) AS count
FROM wish
WHERE wishlist_id = :wishlist_id
```

Hier haben wir wieder Neues. Und zwar `COUNT(*)`. Wir wählen also eine SQL Funktion. Diese Zählt sein Argument. Also es zählt einfach alles was es kriegt. In diesem Fall kriegt es Datensätze aus dieser Abfrage und zählt seine Anzahl. dieses Ergebnis wird in der Spalte `count` gespeichert welches mit denn Kennwort `AS` signalisiert wird.

Hier müssen wir aus der Tabelle `wish` wählen, da wir ja die einzelnen Wünsche gezählt haben möchten. Da wir nicht alle zählen wollen müssen wir diese noch filtern nach der `wishlist_id` damit wir die Anzahl für eine bestimmte liste erhalten.

Diese Abfrage gibt folgendes Ergebnis zurück

| count |
| ----- |
| ###   |

### Alle Wunschlisten eines Nutzers (mit der Anzahl an Wünschen pro Liste)

Damit wir die Wunschlisten auflisten können müssen wir diese Auflisten können und hier wollen wir auch die Anzahl der Wünsche anzeigen deshalb kombinieren wir die oberen Beiden abfragen. Dies geschieht über einen Join.

```sql
SELECT
    w.*, -- Alle Datensätze der Wunschlisten
    COUNT(wi.wishlist_id) AS wish_count -- Anzahl der Wünsche pro Liste
FROM -- Grundtabelle auswählen
    wishlist w
LEFT JOIN -- Füge die Anzahl der Wünsche in die Wunschliste ein
    wish wi ON w.wishlist_id = wi.wishlist_id
WHERE -- Filtern nach einem Nutzer
    user_id = :user_id
GROUP BY -- Gruppieren der Einträge
    w.wishlist_id
ORDER BY -- Sortierung der Einträge
    w.target_date IS NULL ASC,
    w.target_date DESC
```
