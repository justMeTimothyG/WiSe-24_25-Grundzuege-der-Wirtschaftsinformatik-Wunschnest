# WunschNest 
Das ist unser Projekt. Ich habe es schon mehrmals vorgestellt, also halte ich mich kurz. Es wird eine Wunschliste als Webanwendung, die mit PHP gebaut wird. 

## An Wunschnest weiterenwickeln

Damit du vernünftig an Wunschnest entwickeln kannst solltest du `node`, `npm`, und `php` installiert haben, Im idealfall auch `git`. Später kommt noch `mysql` wahrscheinlich noch dazu. Aber das später. 

Damit die Entwicklung in geordneter Weise von statten geht gilt es folgende Dinge zu beachten beim Weiterentwickeln. 

### PHP Server
Den PHP Server kannst in einem Terminal mit folgendem Kommando starten

```bash
php -S localhost:8888
```

Hierfür solltest du im Verzeichnis `/Wunschnest/` dich befinden, damit auch alles korrekt funktioniert.

### Tailwind CSS

Vorausgesetzt du hast php installiert und hast eine UNIX kompatible Umgebung. Desweiteren benötigt du `node` und `npm` um die Tailwindklassen generieren zu lassen. du kannst prüfen ob du beides hast mit. 

`node -v`

und 

`npm -v`

Wenn du eine Version rauskriegst kannst du ganz entspannt Tailwind Klassen generieren lassen. 

Dafür setzt du folgendes ein: 

`npx tailwindcss -i ./css/tailwind.css -o ./css/style.css --watch`

Das eröffnet ein Process der ständig danach schaut, wenn du .php Dateien speicherst, dass alle verwendeten Tailwind Klassen auch in der output CSS Datei verfügbar sind. Im generellen Header `/components/basic-head.php` wird auch diese Output datei verlinkt.

### Git 
Git ist die Versionierung des Codes. So kann man zurückgehen, falls man was kaputt gemacht hat und auch sehen wer welchen Code geändert und hinzugefügt hat, und auch wann. 

> [!NOTE]
> Zur Installation von git Verweise ich mal an die [Offizielle Dokumentation](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git). Für Windows ist die Anleitung ist etwas verwirrend, aber [Heise](https://www.heise.de/tipps-tricks/Git-auf-Windows-installieren-und-einrichten-5046134.html) hatte beim Überfliegen eine gute und Kurze Anleitung (Ganz unten ist sogar eine Kurzanleitung der schon eh kurzen Anleitung).

Damit du mit git anfangen kannst zu arbeiten solltest du die dir aktuelle Version vom Repo immer holen. Falls du dies zum ersten mal machst kannst du erstmal das Repo wie folgt kopieren. 

`git clone https://github.com/justMeTimothyG/WiSe-24_25-Grundzuege-der-Wirtschaftsinformatik-Wunschnest.git`

oder du lädst dir den Code als Zip datei herunter vom Web.

Falls du schon alles eingerichtet hast kannst du einfach denn aktuellen Code dir einfach "ziehen" 

`git pull`



