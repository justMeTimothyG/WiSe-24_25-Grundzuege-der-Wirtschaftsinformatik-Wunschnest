# Projektplanung Wunschnest

Hier soll Überblickmäßig die Daten dargestellt werden. wie wir Zeitlich liegen und welche Ziele wir haben.

## Plan

### Übersicht

Hier sind 9 Termine geplant:
| Datum | Uhrzeit | Thema | Notizen |
| --- | --- | --- | --- |
| 01.11.2024 | 15.00 - 17.30 | (1) Einführung Rechnernetze und HTML | |
| 15.11.2024 | 15.00 - 17.30 | (2) HTML forts., CSS | Status Update |
| 22.11.2024 | 15.00 - 17.30 | (3) Software Entwicklung - Einführung | |
| 29.11.2024 | 15.00 - 17.30 | (4) UML | Status Update |
| 06.12.2024 | 15.00 - 17.30 | (5) Datenbanken | |
| 13.12.2024 | 15.00 - 17.30 | (6) Datenbanken forts. | Status Update |
| 20.12.2024 | 15.00 - 17.30 | (7) PHP | |
| 03.01.2025 | 15.00 - 17.30 | (8) PHP forts. | |
| 10.01.2025 | 12.15 - 17.30 | (9) Präsentations der Prüfungsleistung | Alle müssen es präsentieren können |

### Planung

- (1) 01.11.2024 - HTML
  - Erste Überlegungen bzgl. Features. Nötige Datenpunkte
  - Mockups erstellen
  - Erste Designüberlegungen
- (1.1) 08.11.2024 - ausgefallen
  - Gemeinsame Entwicklungsumgebung einrichten
  - Milestones entwerfen
  - Frontend weiter ausarbeiten vom Design
  - Erste Flows Konzeptionell überlegen
  - Priphere Seiten fertig entwickeln (Impresum, Datenschutz, Kontakt, Strtseite, etc.)
  - Dashboardübersicht design entwerfen
- (2) (Status update) 15.11.2024 - HTML II und CSS
  - Design Farben fertiggestellt. Anhand dessen weiter entwickeln.
  - Flows weiter entwickeln und
    - Benutzer Login
    - Teilen von Listen
- (3) 22.11.2024 - Softwareentwicklung - Einführung
  - Überprüfen des aktuellen Aufbaus des Projekts
  - Routing in der App überlegen
    - über Dateien routen
    - index.php erstelle alles Ansichten und
    - andere Routing Methoden
- (4) (Statusupdate) UML
  - Flow weiter konkretisieren
  - Über Grenzfälle nachdenken und diese in die Flow integrieren
  - Erstellung einer Liste der Views/Seiten, die bennötigt werden
    - welche können zusammengelegt werden aufgrund Ähnlichkeit (dynamische Anpassung durch Parameter)
  - Finales ER Diagramm der Datenbank erstellen
    - Auf korrekte Normalisation prüfen
    - Redundancen Reduzieren
- (5) Datenbanken
  - Datenbankaufbau in .SQL formulieren
  - Skript zur Erstellung von Grund-/Testdaten, damit jeder in seiner Entwicklungsumgebung ähnliche Daten hat.
  - Controller Entwickeln und weiter optimieren
- (6) (Statusupdate) Datenbanken II
  - Datenbank finalisieren. Darstellung der Daten sind nicht redundant und normalisiert
- (7) PHP
  - Programmierung dokumentieren und Kommentieren, sodass andere den Code nachvollziehen können
- (8) PHP II
  - Tests formulieren, Grenzfälle testen
  - Koordination und Gegenseitige Vorstellung der gemeinsamen Entwicklung, sodass jeder den Code versteht.
- (9) Präsentation
  - UML Diagramme alle sortiert in ein Dokumentiert formulieren
  - Beschreibungen leserlich formulieren, sodass aussenstehende es Verstehen

### Reflexionen

Zur Überprüfung des Fortschritts wird ein Ampel System verwendet. (🟢 | 🟡 | 🔴). Jeweils wie folgt beschrieben.

- 🟢
  - Projekt liegt gut in der Zeit und vielleicht sogar im voraus.
- 🟡
  - Projekt liegt liegt leicht in der Verzögerung.
  - Verzögerung kann noch nachgeholt werden
  - Projekt kann in seiner Formulierung noch möglich ausgearbeitet werden.
- 🔴
  - Projekt liegt hängt deutlich hinterher.
  - Kaum Fortschritte
  - Ein Nachholen des Defizits ist kaum bis gar nicht möglich.
  - ggf. muss das Projekt neu formuliert werden, Features rausgenommen oder reduziert werden, da nicht mehr machbar in der Zeit.

#### Termin 1 🟢

Erledigte Meilensteine:

- Mockups erstellt
- Erste Version des Frontends hat sich herausgearbeitet
- Periphere Seiten wurden erstellt
- Entwicklungsumgebung wurde bei allen eingerichtet
- Erstes statisches Frontend wurde erstellt.

#### Termin 2 🟢

Erledigte Meilensteine:

- Benutzer Login Ansichten erstellt
- Datenbanken entworfen
- Dynamisches Einfügen von Daten in einigen Views
- Dark Mode
- Eine Animation wurde eingebaut (Logo)
- Datenbankdesign (erste Formulierung)

Reflexion:
Wir liegen in der Projekttimeline voraus und können erstmal unbesorgt fortfahren.

Feedback:

- Fehlende Aufteilung der Aufgaben unter den Teammitgliedern

#### Termin 3 🟢

Erledigte Meilensteine:

- Dashboard Übersicht (Tim)(mit Testdaten)
- Formulare zum hinzufügen von Wünschen (Lenny)
- Formulare zum hinzufügen von Wunschlisten (Leo)
- Registrierung Formular (Mussnah)

#### Termin 4 🟢

Erledigte Meilensteine:

- Dashboard Seitenleiste erstellt (Raphael)
- Dashboard Ansichten zusammengefügt (Tim)
- Wunschlisten Ansicht (Mussnah + Tim)
- Weitere Überlegungen/Vorbereitung zum erfassen des Kontaktformulars (Leo und Lenny)
- UML Flowcharts (Alle)
  - Klassendiagramm
  - Userflow: Login
  - Userflow: Registrierung
  - Userflow: Wunsch erfüllen
  - Userflow: Wunschliste erstellen
  - Userflow: Wunsch eintragen

Feedback:

- So weit alles in Ordnung, so weiter machen.

#### Termin 5 🟢

- Erstellen von Kategorien (Formular)

#### Termin 6 🟢

- Überlegungen zur Benutzer Tabelle
- Überlegungen zu SQL Statements bezüglich Nutzer und Kontakt Formular
- Erste Anbindung zur Datenbank für das Kontaktformular
- Erstellung von SQL Statements
- Testdaten erstellt
- Shared View

#### Termin 7

#### Termin 8

#### Termin 9

### Meilensteine

#### Frontend

- [x] Erste Ideen - Mockup erstellen
- [x] "Front-end Designsystem" grob entwickeln haben
- [x] Front-end Theme stabil
- [ ] auf Respnsiveness prüfen
- [ ] Front-end Fertiggestellt

Views:

- [x] Startseite (Tim)
- [x] Impressum (Mussnah)
- [x] Datenschutz (Raphael)
- [x] Kontakt (Lenny & Leo)
- [x] Admin Page (Tim)
- [x] Login (Raphael)
- [x] Register (Tim)
- [x] Dashboard (Alle)
  - Sidebar (Raphael)
  - Übersicht (Tim)
  - Formular zum hinzufügen (Leo & Lenny)
  - Detailsansicht (Mussnah)
- [x] Wunschliste (Einzelne Liste)
- [ ] Wunsch Detail Ansicht (Tim)
- [x] Erstellen von Kategorien (Leo & Lenny)
- [x] Geteilte Ansicht für Erfüller (Mussnah)
- [ ] Formular für Erfüller eines Wunschnest (Leo und Lenny)

Nice-to Haves:

- [ ] Archiv (Mussnah)
- [x] Dark Mode (Tim)
- [ ] Layout auf verschiedenen Geräten/Browsern prüfen (Alle)

#### UML

Formulierung von Flows: (Berücksichtigung der Flows im Code und Routing)

- [x] Klassendiagramm (Leo)
- [x] Use Cases von Nutzer und Erfüllern Formulieren (Lenny)
- [x] Login (Tim)
- [x] Registrierung (Mussnah)
- [x] Erstellen von Wunschlisten (Leo)
- [x] Erstellen von Wünschen (Lenny)
- [ ] Erstellen von Kategorien (Mussnah)
- [ ] Teilen einer Wunschliste (Rückgängig Machung einer geteilten Liste) (Tim)
- [x] Ein Erfüller erhält einen Link und erfüllt einen Wunsch (Raphael)

#### Datenbanken

- [x] Erste Überlegungen der Strukturen dokumentieren (Tim)
- [x] Formuliere die nötigen Datenpunkte (Auflistung der Eigenschaften) (Tim)
- [x] Beziehungen zwischen den Tabellen herstellen (Tim)
- [x] Überlegungen zu den Aktionen an den Datensätzen formulieren (Leo & Lenny)
- [x] SQL Statements formulieren anhand der nötigen Aktionen (Lenny)
- [x] SQL Script: Benutzer Tabelle
- [x] SQL Script: Kontakt Tabelle
- [x] SQL Script: Wunschliste Tabelle
- [x] SQL Script: Wunsch Tabelle
- [x] SQL Script: Favoriten Tabelle
- [x] Testdaten für die Entwicklung erstellen (Raphael)
- [ ] Datenbank finalisieren (Alle)

#### PHP Entwicklung

- [x] Ordnerstrukturen angelegt (Tim)
- [ ] Controller und Funktionen formuliert und dokumentiert (Jeweils ein Controller pro Datenbank Tabelle)
  - [x] Kontakt Controller (Alle)
  - [ ] User Controller (Mussnah)
  - [ ] Wishlist Controller (Tim)
  - [ ] Wish Controller (Lenny)
  - [ ] Category Controller (Raphael)
  - [ ] Favorite Controller (Leo)
- [ ] Wiederkehrende Elemente als separate Komponenten ausgelagert. (Tim)
- [ ] Bearbeitung von Wunschlisten (Vorbelegung des Formulars mit bestehenden Werten) (Leo)
- [ ] Bearbeitung von Wünschen (Vorbelegung des Formulars mit bestehenden Werten) (Lenny)
- [ ] Bearbeitung des Favoriten Status (Button in der Wunschliste) (Mussnah)
- [ ] Logout ermöglichen (Tim)
- [ ] Demo funktionsfähig ohne Login (Alle)

Nice to Haves:

- [ ] Archivfunktion (Nicht bearbeitbar - Reaktivieren oder Duplizieren mit übrigen Wünschen) Nachdem es archiviert worden ist sieht man, wer das erfüllt hat. (Tim)
- [ ] Auflistung der Wünsche nach Kategorien
- [ ] Helfer Scripts und Test Scripts formuliert
- [ ] ggf. ins Admin Dashboard einbauen
- [ ] Umgang mit Fehlern, damit Fehler, mit denen nicht gerechnet worden ist standardmäßig verborgen werden, aber geloggt werden.
- [ ]

#### Javascript (Generell Nice to haves)

- [x] Dark Mode Toggle
- [/] Animationen einbauen (Lottie Animationen)
- [/] Link kopieren ins Clipboard (Zwischenablage) beim sharing
- [ ] Validierung der Formulare im Frontend vor der Übermittlung an den Server

#### Präsentation

- [ ] Schlachtplan erstellen für den Ablauf der Vorstellung
- [ ] Liste an besonderen Features erstellen und als Spicker vorbereiten, sodass diese Features nicht vergessen werden vorzustellen
- [ ] UML in eine vernünftige Sortierung bringen für die Vorstellung
- [ ] 2x Probevorstellung mit Kontrolle der Zeit.
- [ ] Fertigstellung der Dokumentation, sodass jeder sich diese durchlesen kann und sich darauf vorbereiten kann.
