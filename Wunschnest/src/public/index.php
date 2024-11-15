<?php
# Diese Datei soll als Einsprungsdatei dienen. Von dieser Datei sollen alle anderen Ansichten erstellt werden. 
# Dies erleichtert einen das navigieren in dem Projekt, da man nicht mehr schauen muss, wo die einzelnen Ansichten liegen.
# Man muss nur noch wissen von wo werden die ansichten generiert. 


# Config Datei Laden
include_once '../config.php';

# Start Session (Hole Daten aus der Session um zu schauen, ob jemand schon eingeloggt ist.)
session_start();

# Überprüfe den aufgerufenen Link (GET Parameter) und im Switch Statement erzeuge die entsprechenden Ansichten. 
$page = isset($_GET['page']) ? $_GET['page'] : 'landing';

switch ($page) {
    case 'impressum':
        include_once VIEWS_PATH . 'impressum.php';
        break;
    case 'admin':
        include_once VIEWS_PATH . 'admin.php';
        break;
    case 'contact':
        include_once VIEWS_PATH . 'contact.php';
        break;
    case 'datenschutz':
        include_once VIEWS_PATH . 'datenschutz.php';
        break;
    case 'register':
        include_once VIEWS_PATH . 'register.php';
        break;
    case 'login':
        include_once VIEWS_PATH . 'login.php';
        break;
    case 'logout':
        include_once VIEWS_PATH . 'logout.php';
        break;
    case 'demo-dashboard':
        include_once VIEWS_PATH . 'dashboard.php';
        break;
    case 'dashboard':
        # Authenticate
        include_once VIEWS_PATH . 'dashboard.php';

        break;
    case 'create':
        # Authenticate
        include_once VIEWS_PATH . 'create.php';
        break;
    case 'wishlist':
        # Authenticate
        include_once VIEWS_PATH . 'wishlist.php';
        break;
    case 'wish':
        # Authenticate
        break;
    case 'share':
        break;
    case 'landing':
        # Standardmäßig die Homepage/Landing Seite laden. 
        # Aber nur wenn nichts angegeben. 
        include_once VIEWS_PATH . 'landing.php';
        break;
    default:
        # 404 Seite anzeigen, da im Zweifel ohne angabe die Homepage geladen wird und wenn irgendwas angegeben wird soll 404 angezeigt werden. 
        include_once VIEWS_PATH . '404.php';
}
