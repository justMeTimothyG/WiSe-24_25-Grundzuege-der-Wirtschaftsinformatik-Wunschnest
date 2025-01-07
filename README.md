# Projektarbeit in Grundzüge der Wirtschaftsinformatik

Wilkommen in diesem Projekt/Repo. Es wurde aus der Veranstaltung "Grundzüge der Wirtschaftsinformatik" geschaffen, da wir hier in die Praxis kommen und selber auch programmieren werden. Auch dient dieses Repo dazu die Arbeit zu dokumentieren, festzuhalten und die gemeinsame Arbeit zu ermöglichen. Leider haben so gut wie alle kein Erfahrung mit git sodass nit sicher ist, ob dies wirklich so funktioneren wird. Aber der Wille war da. Ich wollte dies auch nämlich dazu nutzen mit git etwas zu arbeiten und generell die Speicherung und Versionierung kennen zu lernen.

> ![WARN] Sonderfall der Einrichtung des Projekts!!!
> Für die Einrichtung des Projekts (Dieses Projekt ist ein Sonderfall, da wir einen XAMPP Server/Apache Server verwenden). Die nähere Beschreibung ist hier unter dem Punkt "Starten des Projekts" beschrieben.

## WunschNest

WunschNest ist die Webanwendung, die wir uns vorgenommen haben zu bauen. Sie ermöglich uns einfach Seiten zu bauen, benötigt aber auch eine Anbindung zu einer Datenbank, um Inhalte zu speichern und abzulegen. Wir lernen hier auch die Grundlegenden Arbeiten an Daten (Erstellen, Lesen, Ändern, Löschen)(Engl. CRUD - Create, Read, Update, Delete). So werden alle geplanten inhalte vereint die gelernt werden (HTML, CSS, Javascript, PHP, Datenbanken, etc.)

Weitere Details zum eigentlich Projekt findet ihr im Wunschnest ordner unter [`/src/Wunschnest/`](./src/Wunschnest/).

## Mitglieder dieser Gruppe:

Wir sind 5 Leute, die diese Arbeit bestreiten werden. Folgende Mitglieder sind dabei.

- Timothy (1. Semester)
- Raphael (1. Semester)
- Lenny (1. Semester)
- Leo (1. Semester)
- Mussnah (5. Semester)

So weit haben Lenny, Raphael und Timothy schon bereits ein paar Erfahrungen in den Themen HTML und CSS.

## Starten des Projekts

Durch unsere Entscheidung das Projekt, abweichend von der Empfehlung der Veranstaltung, in VS Code zu entwickeln haben wir uns ebenfalls entschieden das Projekt auf XAMPP laufen zu lassen. Damit die Webseite läuft müssen folgende Einstellungen vorgenommen werden.

Es kann der MariaDB Server von XAMPP genommen werden oder auch ein anderer, hauptsache dieser ist über 127.0.0.1 erreichbar.

Bei XAMPP kommt es auf den Apache Server. Hier muss vor allem die `Document Root` directive in der config des Apache Servers eingestellt werden.
Auf Circa Zeile `157` muss folgender Text eingestellt werden. Hier muss bei XAMPP, beim Apache Server die Config Datei geöffnet werden.

```nginx
DocumentRoot "C:/<ORDNER_DES_PROJEKTS>/Wunschnest/src/public"

# ...

<Directory "C:/<ORDNER_DES_PROJEKTS>/Wunschnest/src/public">
```

Hier muss `<ORDNER_DESPROJEKTS>` ausgetauscht werden mit dem Pfand des eigentlichen Orders.
Sofern keine weiteren Programme den Port 80 verwenden sollte der Server im Browser auf `http://localhost` erreichbar sein.

Nach dieser Einrichtung müssen noch die Zugangsdaten des MariaDB Servers eingestellt werden. Diese werden über eine ENV Datei geladen werden.
Im Ordner `/Wunschnest/src/` gibt es eine `example.env` datei. Diese Inhalte könnten in eine `.env` Datei gespeichert werden oder die example Datei umbenannt werden. Hier können die Zugangsdaten eingetragen werden, oder falls die empfohlenen Standardwerte benutzt worden sind kann diese 1-zu-1 übernommen werden.

Nach diesen Einstellungen sollte der Server ohne weiteres Funktionieren.

## Weitere Dokumentation

Damit wir alle Gedanken für das Projekt festhalten können halten wir diese in einer Dokumentation fest. Hier haben wir folgende Gedanken festgehalten:

- [Projektplanung](./Wunschnest/docs/Projekplanung.md)
  - Hier halten wir unsere Timeline und Meilensteine fest, und wie wir von Woche zu Woche im Projektfortschritt liegen.
- [Git Cheatsheet](./Wunschnest/docs/git-cheatsheet.md)
  - Eine kleine Stütze für die Git kommandos, um weiter im Code zu kommen.
- [User Flows](./Wunschnest/docs/user-flows.md)
  - Hier beschreiben wir die generellen Flows (auch als UML Diagramme) wie eine Nutzer bestimmte Aktionen durchführt.
  - Auch werden interne Logik der App etwas in bestimmten komplexen Funktionen beschrieben.
- [Datenbank Überblick](./Wunschnest/docs/datenbank-design.md)
  - Hier haben wir uns Gedanken gemacht zu den Strukturen der Datenbank und den einzelnen Tabellen
- [SQL Abfragen](./Wunschnest/docs/sql-abfragen.md)
  - Hier sind beispielhafte SQL Abfragen, die in der App gemacht werden an den Server
