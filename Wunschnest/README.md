# WunschNest

Das ist unser Projekt. Ich habe es schon mehrmals vorgestellt, also halte ich mich kurz. Es wird eine Wunschliste als Webanwendung, die mit PHP gebaut wird.

## An Wunschnest weiterenwickeln

Damit du vernünftig an Wunschnest entwickeln kannst solltest du `node`, `npm`, und `php` installiert haben, Im idealfall auch `git`. Später kommt noch `mysql` wahrscheinlich noch dazu. Aber das später.

Damit die Entwicklung in geordneter Weise von statten geht gilt es folgende Dinge zu beachten beim Weiterentwickeln.
Entweder installierst du alle Teilbereiche einzeln. oder du verwendest die einfach Variante mit XAMPP. Da wird der Apache Server, PHP, MySQL für dich installiert.

### Vorbereitung

Zur Entwicklung musst du folgendes installiert haben:

- node
- npm
- xampp
  - php
  - mysql
  - apache
- git
- VS Code

#### node und npm installieren

Für Windows kann du folgendes in PowerShell ausführen (Als Administrator ausführen!):

Fast Node Manager installieren

```PowerShell
# installs fnm (Fast Node Manager)
winget install Schniz.fnm
# configure fnm environment
fnm env --use-on-cd | Out-String | Invoke-Expression
# download and install Node.js
fnm use --install-if-missing 22
#Auführen von Skripten erlauben
Set-ExecutionPolicy -ExecutionPolicy RemoteSigned
# verifies the right Node.js version is in the environment
node -v # should print `v22.11.0`
# verifies the right npm version is in the environment
npm -v # should print `10.9.0`
```

Für Mac kannst du folgendes tun:

Homebrew installieren:

```bash
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
```

Installation:

```bash
# download and install Node.js
brew install node@22
# verifies the right Node.js version is in the environment
node -v # should print `v22.11.0`
# verifies the right npm version is in the environment
npm -v # should print `10.9.0`
```

#### XAMPP installieren

Das ist tatsächlich relativ einfach, hierfür musst du lediglich auf der [apachefriends](https://www.apachefriends.org/de/index.html) für dein Betriebssystem XAMPP herunterladen. Und der Installation einfach folgen.
Wichtig ist dass du das Verzeichnis `/Wunschnest/src` als Stammverzeichnis angibst.

> [!NOTE]
> Für Mac kann ich MAMP empfehlen, die kostenlose Version ist auch völlig ausreichend. Denn XAMPP scheint aktuell nicht auf MacOS zu laufen.

#### VS Code installieren

Am besten könnt ihr einfach den Installer von VS Code downloaden und alles standard mäßig einrichten.

Wenn ihr VS Code gestartet habt müsst ihr folgende Extensions installieren:

- HTML CSS Support
- PHP Intelliphense
- Prettier Code Formatter
- GitLens
- GitHub Pull Requests
- Tailwind CSS Intellisense
- Tailwind Fold
- Git Graph

Optional auch folgendes:

- Highlight Matching Tag
- Live Server
-

#### Git installieren

Git ist die Versionierung des Codes. So kann man zurückgehen, falls man was kaputt gemacht hat und auch sehen wer welchen Code geändert und hinzugefügt hat, und auch wann. Bitte beachte, dass du die Installation als Administrator durchführen musst! Damit git funktioniert musst du ggf. Windows neu starten.

> [!NOTE]
> Zur Installation von git Verweise ich mal an die [Offizielle Dokumentation](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git). Für Windows ist die Anleitung ist etwas verwirrend, aber [Heise](https://www.heise.de/tipps-tricks/Git-auf-Windows-installieren-und-einrichten-5046134.html) hatte beim Überfliegen eine gute und Kurze Anleitung (Ganz unten ist sogar eine Kurzanleitung der schon eh kurzen Anleitung).
>
> Alternativ kannst du natürlich auch WSL (Windows Subsystem for Linux) verwenden, wo du dann ein Linux System auf Windows hast, um diese ganze Entwicklung auch einfacher zu verfolgen.

Falls es graphisch sein soll für Windows kannst du auch GitHub Desktop installieren. Das ist natürlich auf GitHub zugeschnitten: [GitHub Desktop](https://desktop.github.com/) . Du musst aber trotzdem Git installieren.

Für den Mac kannst du folgendes tun um git mit homebrew zu installieren:

```bash
brew install git
```

Damit solltest du alles startklar haben, um zu arbeiten.

#### XAMPP einrichten (Windows)

Möglicherweise kommt ein (UAC Fehler) auf. Aber diesen kannst du erstmal ignorieren.

### Anfangen zu Entwickeln

Du solltest du die dir aktuelle Version vom Repo immer holen. Falls du dies zum ersten mal machst kannst du erstmal das Repo wie folgt kopieren.

Wechsel Dafür in den Ordner wo du die Datei haben möchtest mittels `cd`

Windows:

```PowerShell
cd $HOME\Documents
```

UNIX/Mac:

```bash
cd ~/Documents
```

```bash
git clone https://github.com/justMeTimothyG/WiSe-24_25-Grundzuege-der-Wirtschaftsinformatik-Wunschnest.git
```

oder du lädst dir den Code als Zip datei herunter vom Web.

Bevor du anfängst zu entwickeln solltest du immer wieder die aktuelle Version runterladen.

```bash
git pull
```

Wenn du im `master` branch bist kannst du dir alles anschauen was schon fest in das Projekt eingearbeitet worden ist.
Weitere Branches gibt es für jede Person mit dem 2 stelligen Kürzel, also:

- tl
- rq
- ls
- lp
- ma

Wenn du weiterentwickeln solltest solltest du jede Änderung auf deinem Branch machen. Ein Branch ist quasi deine eigene Version des Codes. Die du später in den master einfügen kannst. Du entwicklest quasi in deinem eigenen Vorlauf, mit eigenen Änderungen und eigener Historie an Änderungen.

zum wechseln braucht du:

```bash
git checkout -b <kürzel>
```

Hiermit kannst du auch schon anfangen zu entwickeln. Damit alles läuft musst du natürlich den PHP/Apache Server starten (XAMPP oder MAMP) diesen musst du mit dem Root Stammverzeichnis im Ordner `Wunschnest/src` hinterlegen. Sonst funktioniert der Server nicht wie er soll. Und auch die Standard Port nehmen (80 und 3306). Mit einer PHP Version von mind. 8.

Zuletzt musst du im `Wunschnest/src` Ordner noch den Tailwind Beobachter starten, damit auch alle Tailwindklassen erfasst werden die du benutzen willst. den startest du in einer Terminal Session mit folgenden NPM Kommando:

```bash
npx tailwindcss -i ./public/css/tailwind.css -o ./public/css/style.css --watch
```

Das eröffnet ein Process der ständig danach schaut, wenn du .php Dateien speicherst, dass alle verwendeten Tailwind Klassen auch in der output CSS Datei verfügbar sind. Im generellen Header `/components/basic-head.php` wird auch diese Output datei verlinkt.

Damit hast du dann zunächst erstmal alles wichtigste am laufen, damit du weiterentwickeln kannst und auch die Änderungen funktionieren prüfen kannst.

> Nun Kannst du erstmal entwickeln.

Wenn du fertig bist, bzw. während dessen schon werden dir auch deine Änderungen und Details angezeigt im IDE deiner wahl (IntelliJ oder VS Code) angezeigt. Dateien und COde Zeilen werden farblich hinterlegt, damit du sehen kannst was geändert worden ist.

#### Server Starten

Öffne XAMPP als Administrator und Ändere die Konfiguration für Apache. Das ist bei geöffnetem Fenster bei XAMPP die erste Zeile.

geöffnet wird es standardmäßig mit Notepad. Suche nach der Zeile: (Circa Zeile 255)

```
DocumentRoot “C:/xampp/htdocs”
<Directory “C:/xampp/htdocs”>
```

Um ersetze den Pfad mit dem Pfand für das Projekt, das du von Git kopiert hast. In der Regel sollte es circa So Aussehen:

```
C:\DEIN_PFAD_Wo_DU_DAS_PROJEKT_GESPEICHERT_HAST\WiSe-24_25-Grundzuege-der-Wirtschaftsinformatik-Wunschnest\Wunschnest\src\public
```

#### Änderungen bei Git Speichern.

Um deine Änderungen bei git hinzuzufügen machst du:

```bash
git add .
```

Das fügt alle deine Dateien in den Vorlauf. Um sie dann als Schnappschuss in die Historie einzuspeichern machst du:

```bash
git commit -m "<Deine Nachricht>"
```

Bei der Nachricht machst du eine kurze Beschreibung was du gemacht hast. Kein Aufsatz, sondern stichworte als Beschreibung.
Beispiele: Hover feature hinzugefügt. "Bug fix im UI", "Dark Mode", "Wunschlisten Logik optimiert". sowas.

Dann ist deine Bearbeitung erstmal gespeichert und in git hinterlegt. Zunächst erstmal nur auf deinem PC. Wenn du den Code auf GitHub "schieben" möchtest machst du folgendes:

```bash
git push origin <kürzel>
```

Abhängig von den Änderungen die in der Zwischenzeit passiert sind kannst du Fehlermeldungen kriegen, Aber nur wenn du überlappend Änderungen mit anderen gemacht hast. Deswegen ist es wichtig Änderungen vor dem Anfangen sich zu ziehen und nach dem Beenden direkt zu speichern! Wenn du nicht weißt was du tun sollst kannst du auch einfach auf das nächste Teammeeting warten und wir lösen das gemeinsam auf.

#### Änderungen von Git im Master in dein Branch hinzufügen

Damit du die aktuellsten Änderungen hast sollte du vor jedem weiteren entwickeln prüfen welche Änderungen geschehen sind. Zunächst musst du erstmal die Neuerungen herunterladen.

```bash
git fetch
```

Dann musst du prüfen ob Änderungen überhaupt vorhanden sind. Am einfachsten ist es `view git graph (git log)` zu öffnen und zu schauen ob master im voraus ist zu deinem eigenem Branch. Wenn dies der Fall ist, dann solltest die Änderungen in Master auf dein Branch hinzufügen.

```bash
git merge origin/master
```

Falls es Abweichungen gibt wird dir das angezeigt. Du kannst die Dateien einzeln anschauen und Entscheiden welche Änderungen du behalten willst. Dann musst du den merge wieder commiten.
