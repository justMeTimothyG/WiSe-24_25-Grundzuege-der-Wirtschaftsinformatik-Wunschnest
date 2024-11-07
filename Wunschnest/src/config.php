<?php
# Definiere die Basis Pfade, damit keine Kaputten Links entstehen / also die verweise iin unterschieldichen pfaden funktionieren.
define('BASE_PATH', __DIR__);
define('COMPONENTS_PATH', BASE_PATH . '/components/includes/');
define('VIEWS_PATH', BASE_PATH . '/app/views/');

# Lade Datenbank Daten aus der .env datei 
function loadENV($file)
{
    # Wenn Datei nicht existiert, breche ab
    if (!file_exists($file)) {
        return false;
    }
    # Lade die Datei in zeilen und lösche alle leeren Zeilen, und ignoriere "New Lines" Charakters
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    # Gehe durch Jede Zeile und Lade die Daten
    foreach ($lines as $line) {
        # Ignoeriere Kommentierte Zeilen
        # Entferne alle leerzeichen am Anfang und am Ende (trim) und prüfe ob das erste Zeichen ein "#" 
        if (strpos(trim($line), '#') === 0) continue;

        # Lade die Daten als ENV Variablen
        # Teile den String am "=" auf (explode) und speichere beiden Werte in $key und $value
        list($key, $value) = explode('=', $line);

        # Speichere die Daten in die ENV Variablen (Lösche vorherige und nachhängige Leerzeichen vorher)
        $_ENV[trim($key)] = trim($value);
        putenv("$key=$value");
    }
};

# Führe die Funktion LoadENV aus und Lade die Daten in die Umgebung
loadENV(BASE_PATH . '/.env');
