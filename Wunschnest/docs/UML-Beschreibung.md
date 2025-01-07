# UML Beschreibungen

Damit die App auch ein Grundgerüst hast und besser entwickelt werden kann müssen die Inhalte und Funktionen vorab beschrieben werden. Sie bilden quasi eine Blaupause für das Gesamte Projekt. Somit ist hier ein Sammelsorium an Beschreibungen der Funktionen der App.

> ![NOTE] Bilder
> Alle Bilder der Diagramme sind auch im Ordner [`./assets/`](./assets/) zu finden.

## Klassendiagram

Hier sind die wichtigsten Klassen der App WunschNest.

![](./assets/klassendiagramm.png)

Wie man sieht steht die Klasse Wunschliste im Mittelpunkt. Sie bildet die Zentrale Einheit, um die man die ganze Zeit interagiert.

## Use Case Diagramm

Die möglichen Nutzen unserer App

![](./assets/usecase.png)

## Zustandsdiagramm

Dieses Zustandsdiagram beschreibt den Zustand einer Wunschliste.

![](./assets/state-machine.png)

## EER Diagramm

![](./assets/EER.png)

## Relations Diagramm

![](./assets/Relation.png)

## User Flows

Ein Nutzer der App kann unterschiedliche Erfahrungen während der Benutzung der App machen. Dies kann ich flows beschrieben werden in Abläufen. Es kann unterschiedliche Flows für einen Nutzer geben:

- [x] Login
- [x] Registrierung
- [x] Ausloggen
- [x] Wunschlisten/Wünsche erstellen
- [ ] Kategorien erstellen
- [ ] Favoriten hinzufügen
- [ ] Kategorien bearbeiten
- [x] Erfüller erfüllt Wunsch

### Login

Der Login ist sehr einfach gestaltet und zunächst werden auf komplexere Authentifizierung verzichtet.

```mermaid
graph TD;
    A[Start] --> B[Nutzer öffnet Login Seite];
    B --> C[Nutzer gibt Nutzername und Passwort ein];
    C --> D{Gültige Eingabe?};
    D -->|Yes| E[Zum Dashboard weiterleiten];
    D -->|No| F[Fehler anzeigen];
    F --> B;
    E --> G[Ende];
```

---

### Registrierung

Ein neuer Nutzer möchte sich ja auch registieren können um anzufangen eine Liste anzulegen.

```mermaid
flowchart TD
    A[Benutzerregistrierung starten] --> B[Benutzerdaten eingeben]
    B --> C{Datenvalidierung}
    C -->|gültig| D[Benutzerkonto erstellen]
    C -->|ungültig| E[Fehlermeldung anzeigen]
    D --> G[Willkommensbildschirm anzeigen]
    G --> F[Registrierung abgeschlossen]
    E --> B
```

---

### Wunschlisten erstellen

Das ist die Zentrale Einheit, wie im Klassendiagramm dargestellt. Deshalb muss diese Funktion einfach erreichbar sein.

```mermaid
flowchart TD
    A[Dashboard Seitenleiste] --> C[Wunschlisten Formular]
    B[Dashboard Wunschlisten Auflistung] --> C
    C --> D[Dateneingabe]
    D --> E{Datenvalidierung}
    E -->|gültig| F[Wunschliste erstellen]
    E -->|ungültig| G[Fehlermeldung anzeigen]
    G -->|vorherige Daten vorausfüllen| D
    F --> H[Zur Wunschliste weiterleiten]
    H --> I[Erstellung abgeschlossen]
```

---

### Wünsche eintragen

```mermaid
flowchart TD
	A[Wunschlisten Ansicht] --> C[Formular für Wünsche]
    B[Dashboard Seitenleiste] --> C
    C --> D[Dateneingabe]
    D --> E{Datenvalidierung}
    E -->|gültig| F[Wunsch eintragen]
    E -->|ungültig| G[Fehlermeldung anzeigen]
    F --> F1[Weiteren Wunsch hinzufügen — Submit+]
    F1 --> C
    G -->|vorherige Daten vorausfüllen| D
    F --> H[Zur Wunschliste weiterleiten]
    H --> I[Erstellung abgeschlossen]
```

---

### Erfüller erfüllt Wunsch

```mermaid
flowchart TD
    A[Eingabe des Share-Links] --> B[Share Ansicht der Wunschliste]
    B --> C[Sucht Wunsch aus]
    C --> D{anonym?}
    D -->|ja| E[Drückt auf Erfüllen]
    D -->|nein| F[trägt Kürzel oder Namen ein]
    F --> E
    E --> G[Seite Neuladen mit aktualisierten Daten]
    G --> GX{weiteren Wunsch erfüllen?}
    GX -->|nein| H[Erfüllen beendet]
    GX -->|ja| C
```

---

##
