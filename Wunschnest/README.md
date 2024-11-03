# WunschNest

Das ist unser Projekt. Ich habe es schon mehrmals vorgestellt, also halte ich mich kurz. Es wird eine Wunschliste als Webanwendung, die mit PHP gebaut wird.

## An Wunschnest weiterenwickeln

Damit du vernünftig an Wunschnest entwickeln kannst solltest du `node`, `npm`, und `php` installiert haben, Im idealfall auch `git`. Später kommt noch `mysql` wahrscheinlich noch dazu. Aber das später.

Damit die Entwicklung in geordneter Weise von statten geht gilt es folgende Dinge zu beachten beim Weiterentwickeln.
Entweder installierst du alle Teilbereiche einzeln. oder du verwendest die einfach Variante mit XAMPP. Da wird der Apache Server, PHP, MySQL für dich installiert.

### XAMPP installieren

Das ist tatsächlich relativ einfach, hierfür musst du lediglich auf der [apachefriends](https://www.apachefriends.org/de/index.html) für dein Betriebssystem XAMPP herunterladen. Und der Installation einfach folgen.
Wichtig ist dass du das Verzeichnis `/Wunschnest/src` als Stammverzeichnis angibst.

> [!NOTE]
> Für Mac kann ich MAMP empfehlen, die kostenlose Version ist auch völlig ausreichend. Denn XAMPP scheint aktuell nicht auf MacOS zu laufen.

### Tailwind CSS

Desweiteren benötigt du `node` und `npm` um die Tailwindklassen generieren zu lassen. du kannst prüfen ob du beides hast mit.

```bash
node -v
```

und

```bash
npm -v
```

Wenn du eine Version rauskriegst kannst du ganz entspannt Tailwind Klassen generieren lassen. Da sollte sowas wie `v22.9.0` oder `10.8.3` als Ausgabe rauskommen. Falls nicht musst du diese beiden noch installieren.

Dafür setzt du folgendes ein:

```bash
npx tailwindcss -i ./public/css/tailwind.css -o ./public/css/style.css --watch
```

Das eröffnet ein Process der ständig danach schaut, wenn du .php Dateien speicherst, dass alle verwendeten Tailwind Klassen auch in der output CSS Datei verfügbar sind. Im generellen Header `/components/basic-head.php` wird auch diese Output datei verlinkt.

Damit hast du dann zunächst erstmal alles wichtigste am laufen, damit du weiterentwickeln kannst und auch die Änderungen funktionieren prüfen kannst.

### Git

Git ist die Versionierung des Codes. So kann man zurückgehen, falls man was kaputt gemacht hat und auch sehen wer welchen Code geändert und hinzugefügt hat, und auch wann.

> [!NOTE]
> Zur Installation von git Verweise ich mal an die [Offizielle Dokumentation](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git). Für Windows ist die Anleitung ist etwas verwirrend, aber [Heise](https://www.heise.de/tipps-tricks/Git-auf-Windows-installieren-und-einrichten-5046134.html) hatte beim Überfliegen eine gute und Kurze Anleitung (Ganz unten ist sogar eine Kurzanleitung der schon eh kurzen Anleitung).
>
> Alternativ kannst du natürlich auch WSL (Windows Subsystem for Linux) verwenden, wo du dann ein Linux System auf Windows hast, um diese ganze Entwicklung auch einfacher zu verfolgen.

Damit du mit git anfangen kannst zu arbeiten solltest du die dir aktuelle Version vom Repo immer holen. Falls du dies zum ersten mal machst kannst du erstmal das Repo wie folgt kopieren.

```bash
git clone https://github.com/justMeTimothyG/WiSe-24_25-Grundzuege-der-Wirtschaftsinformatik-Wunschnest.git
```

oder du lädst dir den Code als Zip datei herunter vom Web.

Falls du schon alles eingerichtet hast kannst du einfach denn aktuellen Code dir einfach "ziehen"

```bash
git pull
```
