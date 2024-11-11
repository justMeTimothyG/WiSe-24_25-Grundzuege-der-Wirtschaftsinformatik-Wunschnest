# Projektplanung Wunschnest

Hier soll Überblickmäßig die Daten dargestellt werden. wie wir Zeitlich liegen und welche Ziele wir haben.

## Plan

### Übersicht

Hier sind 9 Termine geplant:
| Datum | Uhrzeit | Thema | Notizen |
| --- | --- | --- | --- |
| 01.11.2024 | 15.00 - 17.30 | (1) Einführung Rechnernetze und HTML | |
| 15.11.2024 | 15.00 - 17.30 | (2) HTML forts., CSS | Status Update |
| 22.11.2024 | 15.00 - 17.30 | (3) Software Entwicklung - Einführung | Status Update |
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

- Mockups erstellt
- Erste Version des Frontends hat sich herausgearbeitet
- Periphere Seiten wurden erstellt
- Entwicklungsumgebung wurde bei allen eingerichtet
- Erstes statisches Frontend wurde erstellt.

#### Termin 2 🟢

- Benutzer Login ANsichten erstellt
- Datenbanken bereits angelegt
- Dynamisches Einfügen von Daten in einigen Views
- Erstellen von einträgen in Datenbanken
- Dark Mode
- Eine Animation wurde eingebaut (Logo)
- Datenbankdesign (erste Formulierung)

#### Termin 3

#### Termin 4

#### Termin 5

#### Termin 6

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

- [x] Startseite
- [x] Impressum
- [x] Datenschutz
- [x] Kontakt
- [x] Admin Page
- [x] Login
- [x] Register
- [x] Dashboard
- [x] Wunschliste (Einzelne Liste)
- [ ] Archiv
- [ ] Wunsch Detail Ansicht
- [x] Erstellen von Wünschen
- [x] Erstellen von Wunschlisten
- [ ] Erstellen von Kategorien
- [ ] Geteilte Ansicht für Erfüller
- [ ] Formular für Erfüller eines Wunschnest

Nice-to Haves:

- [x] Dark Mode
- [ ] Layout auf verschiedenen Geräten/Browsern prüfen

#### UML

Formulierung von Flows: (Berücksichtigung der Flows im Code und Routing)

- [ ] Überragender User Flow von Anfang bis Ende
- [ ] Login
- [ ] Logout
- [ ] Registrierungs
- [ ] Erstellen von Wunschlisten
- [ ] Erstellen von Wünschen
- [ ] Erstellen von Kategorien
- [ ] Teilen einer Wunschliste (Rückgängig Machung einer geteilten Liste)
- [ ] Ein Erfüller erhält einen Link und erfüllt einen Wunsch

#### Datenbanken

- [x] Erste Überlegungen der Strukturen dokumentieren
- [x] Formuliere die nötigen Datenpunkte (Auflistung der Eigenschaften)
- [x] Beziehungen zwischen den Tabellen herstellen
- [ ] Überlegungen zu den Aktionen an den Datensätzen formulieren
- [ ] SQL Statements formulieren anhand der nötigen Aktionen
- [ ] Datenbank finalisieren
- [ ] Testdaten für die Entwicklung erstellen
- [ ]

#### PHP Entwicklung

- [x] Ordnerstrukturen angelegt
- [x] Controller und Funktionen formuliert und dokumentiert (Jeweils ein Controller pro Datenbank Tabelle)
  - [x] User Controller
  - [x] Wishlist Controller
  - [x] Wish COntroller
  - [x] Category Controller
  - [x] Favorite Controller
- [ ] Wiederkehrende Elemente als separate Komponenten ausgelagert.
- [ ] Helfer Scripts und Test Scripts formuliert
- [ ] Controller testen
- [ ] ggf. ins Admin Dashboard einbauen
- [ ] Bearbeitung von Wunschlisten (Vorbelegung des Formulars mit bestehenden Werten)
- [ ] Bearbeitung von Wünschen (Vorbelegung des Formulars mit bestehenden Werten)
- [ ] Bearbeitung des Favoriten Status (Button in der Wunschliste)
- [ ] Auflistung der Wünsche nach Kategorien
- [ ] Archivfunktion (Nicht bearbeitbar - Reaktivieren oder Duplizieren mit übrigen Wünschen) Nachdem es archiviert worden ist sieht man, wer das erfüllt hat.
- [ ] Logout ermöglichen
- [ ] Demo funktionsfähig ohne Login
- [ ]

Nice to Haves:

- [ ] Umgang mit Fehlern, damit Fehler, mit denen nicht gerechnet worden ist standardmäßig verborgen werden, aber geloggt werden.
- [ ]

#### Javascript (Generell Nice to haves)

- [x] Dark Mode Toggle
- [/] Animationen einbauen (Lottie Animationen)
- [ ] Link kopieren ins Clipboard (Zwischenablage) beim sharing
- [ ] Validierung der Formulare im Frontend vor der Übermittlung an den Server

#### Präsentation

- [ ] Schlachtplan erstellen für den Ablauf der Vorstellung
- [ ] Liste an besonderen Features erstellen und als Spicker vorbereiten, sodass diese Features nicht vergessen werden vorzustellen
- [ ] UML in eine vernünftige Sortierung bringen für die Vorstellung
- [ ] 2x Probevorstellung mit Kontrolle der Zeit.
- [ ] Fertigstellung der Dokumentation, sodass jeder sich diese durchlesen kann und sich darauf vorbereiten kann.
