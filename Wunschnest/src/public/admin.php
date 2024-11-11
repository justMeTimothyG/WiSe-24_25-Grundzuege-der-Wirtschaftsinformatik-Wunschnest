<?php
# Diese Datei soll als Einsprungsdatei dienen. Von dieser Datei sollen alle anderen Ansichten erstellt werden. 
# Dies erleichtert einen das navigieren in dem Projekt, da man nicht mehr schauen muss, wo die einzelnen Ansichten liegen.
# Man muss nur noch wissen von wo werden die ansichten generiert. 


# Config Datei Laden
include_once '../config.php';

# Start Session (Hole Daten aus der Session um zu schauen, ob jemand schon eingeloggt ist.)
session_start();

# Destroy Session Da Initialisierung stattfindet unset all session variables


# Überprüfe den aufgerufenen Link (GET Parameter) und im Switch Statement erzeuge die entsprechenden Ansichten. 
$action = isset($_GET['action']) ? $_GET['action'] : 'none';

switch ($action) {
    case 'reset':
        # RUN RESET SCRIPT
        include_once BASE_PATH . '/app/admin/reset.php';
        break;
        // case 'reset_min':
        //     include_once VIEWS_PATH . 'admin.php';
        //     break;

    default:
        # 404 Seite anzeigen, da im Zweifel ohne angabe die Homepage geladen wird und wenn irgendwas angegeben wird soll 404 angezeigt werden. 
        include_once VIEWS_PATH . '404.php';
}
