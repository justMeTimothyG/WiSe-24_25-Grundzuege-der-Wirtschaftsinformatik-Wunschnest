<?php
include_once '../config.php';
include_once BASE_PATH . '/app/config/database.php';

include_once BASE_PATH . '/app/controllers/ContactController.php';

# start session 
session_start();

# Prüfe ob ein Post Request vorliegt, ansonsten gebe einen Fehler aus
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    # Hole die Daten aus dem Formular und Bereinige diese
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = $_POST['message'];



    if (empty($name) || empty($email) || empty($message)) {
        $_SESSION['message'] = "Alle Felder werden benötigt.";
        $_SESSION['check'] = "error";
        header("Location: /index.php?page=contact");
        exit();
    }

    # Stelle eine Verbdingung zur Datenbank her
    $pdo = getDatabaseConnection();
    $contactController = new ContactController($pdo);

    # Schreibe die Anfrage in die Datenbank
    $result = $contactController->addContact($name, $email, $message);

    # Prüfe ob es erfolgreich war
    if ($result) {
        $toast_message = '<span class="font-bold">' . $name . '</span> sendete die Nachricht:<br><p>' . $message . '</p>';
        $_SESSION["message"] = $toast_message;
        $_SESSION["check"] = "success";
    } else {
        $_SESSION["message"] = "Fehler bei der Übertragung";
        $_SESSION["check"] = "error";
    }

    header("Location: /index.php?page=contact");
    exit();
} else {
    $message = "Falsche Anfrage Methode. Nutze ein POST Request.";
    # Setze die Nachricht in die Session zur Ausgabe im Register Formular Wenn Fehlerhaft
    $_SESSION['message'] = $message;
    $_SESSION['check'] = "error";
    header("Location: /index.php");
    exit();
}
