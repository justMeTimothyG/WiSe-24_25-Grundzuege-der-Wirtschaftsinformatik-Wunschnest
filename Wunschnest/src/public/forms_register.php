<?php
include_once '../config.php';
include_once BASE_PATH . '/app/config/database.php';

# Importiere den Controller, um besser Nutzerdaten zu verarbeiten
include BASE_PATH . '/app/controllers/UserController.php';

# Starte eine Session, wenn nicht schon vorhanden
session_start();


# Prüfe ob ein Post Request vorliegt, ansonsten gebe einen Fehler aus
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    # Gebe alle infos aus dem Post request aus.
    # var_dump($_POST);

    # Hole die Daten aus dem Formular und Bereinige diese
    $name = trim($_POST['name']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    # Prüfe ob psswörter übereinstimmen
    if ($_POST['password'] !== $_POST['password-confirm']) {
        die("Die Passwoerter stimmen nicht überein.");
    }



    if (empty($name) || empty($email) || empty($password)) {
        die("All fields are required.");
    }

    // # Für TEST
    // # Gebe die Daten mal aus
    // echo "Name: " . $name . "<br>";
    // echo "Email: " . $email . "<br>";
    // echo "Passwordhash: " . $password . "<br>";

    # Stelle eine Verbdingung zur Datenbank her
    $pdo = getDatabaseConnection();

    # Erstelle ein neues Nutzer Objekt
    $userController = new UserController($pdo);

    # Trage den Nutzer in die Datenbank ein
    $message = $userController->register($name, $username, $email, $password);

    # Setze die Nachricht in die Session zur Ausgabe im Login Formular
    $_SESSION['register_message'] = $message;
    $_SESSION['register_check'] = "success";

    header("Location: /login.php");
    exit();
} else {
    $message = "Falsche Anfrage Methode. Nutze ein POST Request.";
    # Setze die Nachricht in die Session zur Ausgabe im Register Formular Wenn Fehlerhaft
    $_SESSION['register_message'] = $message;
    $_SESSION['register_check'] = "fail";
    header("Location: /register.php");
    exit();
}
