<?php

/**
 * Stellt ein Verbindungsobjekt zur Datenbank her.
 *
 * @return PDO Gibt das Objekt zurück, dass sich mit der Datenbank verbindet
 */
function getDatabaseConnection()
{
    # Lade die Datenbank Verbindung

    # Hole Variabeln aus der .env
    $host = $_ENV['DB_HOST'];
    $dbname = $_ENV['DB_NAME'];
    $username = $_ENV['DB_USER'];
    $password = $_ENV['DB_PASSWORD'];

    try {
        # Erstelle den Verbindungslink her
        $dsn = "mysql:host=$host;dbname=$dbname";
        # Erstelle die Datenbank Verbindung als PDO Objekt
        $pdo = new PDO($dsn, $username, $password);
        # Setze die Fehlermodus
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        # Gebe die Datenbank Verbindung zurück
        return $pdo;
    } catch (PDOException $e) {
        die("Verbindung zur Datenbank fehlgeschlagen: " . $e->getMessage());
    }
}
