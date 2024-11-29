<?php
include_once '../config.php';
include_once BASE_PATH . '/app/config/database.php';

# Lösche die Gesamte Datenbank

# Versuche die Datenbankverbindung herzustellen, falls nicht möglich verbinde ohne Datenbankangabe und erstelle die Datenbank
try {
    $pdo_reset = getDatabaseConnection();
    // echo var_dump($pdo_reset);

} catch (PDOException $e) {
    // echo "get database connection failed. <brY";
    
        try {
            # Hole Variabeln aus der .env
            $host = $_ENV['DB_HOST'];
            $username = $_ENV['DB_USER'];
            $password = $_ENV['DB_PASSWORD'];

            # Gebe Variablen aus: 
            // echo "DB_HOST: " . $_ENV['DB_HOST'] . "<br>";
            // echo "DB_USER: " . $_ENV['DB_USER'] . "<br>";
            // echo "DB_PASSWORD: " . $_ENV['DB_PASSWORD'] . "<br>";


            // Fallback: Verbindung ohne Angabe einer Datenbank herstellen
            $pdo_reset = new PDO("mysql:host=$host", $username, $password);
            $pdo_reset->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            //  echo "connection successful";
        } catch (PDOException $e) {
            // Fehler bei der Verbindung zum Server
            die("Kritischer Fehler: Verbindung zum Server nicht möglich. " . $e->getMessage());
        }


} 


$files = glob(BASE_PATH . DIRECTORY_SEPARATOR .'sql' . DIRECTORY_SEPARATOR . '*.sql');
natsort($files);


try {

# Erstelle alle Tabllen wieder mit den Tabellen Definitionen
foreach ($files as $file) {
    $sql = file_get_contents($file);
    // echo var_dump($pdo_reset);
    // echo "<br><br>";
    // echo $sql . "<br><br>";
    if ($sql) {
        $pdo_reset->exec($sql);
    }
}

# destroy the session
session_destroy();

# starte eine neue session
session_start();

# Zeige Benachrichtigung mit dem Standardlogin an 
$_SESSION['check'] = "success";
$_SESSION['message'] = "Die Datenbank wurde erfolgreich zurueckgesetzt. Versuche dich mit 'starlord', 'rocket' oder 'groot' mit dem Passwort '1234' einzuloggen.  <br> <br>";


header("Location: /index.php?page=login");

} catch (PDOException $e) {
    echo "Fehler beim Reset der Datenbank: " . $e->getMessage();
}