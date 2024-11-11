<?php
include_once '../config.php';
include_once BASE_PATH . '/app/config/database.php';

# Lösche die Gesamte Datenbank
$pdo = getDatabaseConnection();




$files = glob(BASE_PATH . '/sql/*.sql');
natsort($files);


# Erstelle alle Tabllen wieder mit den Tabellen Definitionen
foreach ($files as $file) {
    $sql = file_get_contents($file);
    if ($sql) {
        $pdo->exec($sql);
    }
}

# destroy the session
session_destroy();

# starte eine neue session
session_start();

# Zeige Benachrichtigung mit dem Standardlogin an 
$_SESSION['check'] = "success";
$_SESSION['message'] = "Die Datenbank wurde erfolgreich zurueckgesetzt. Versuche dich mit 'starlord', 'rocket' oder 'groot' mit dem Passwort '1234' ";


header("Location: /index.php?page=login");
