<?php
include_once '../config.php';
include_once BASE_PATH . '/app/config/database.php';

# Importiere den Controller, um besser Nutzerdaten zu verarbeiten
include BASE_PATH . '/app/controllers/UserController.php';

# Starte eine Session, wenn nicht schon vorhanden
session_start();


# Prüfe ob ein Post Request vorliegt, ansonsten gebe einen Fehler aus
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // # TEST
    // # Gebe alle infos aus dem Post request aus.
    // # var_dump($_POST);

    # Hole die Daten aus dem Formular und Bereinige diese
    $kennung = trim($_POST['kennung']);
    $remember = trim($_POST['remember']);
    $password = $_POST['password'];

    # Stelle eine Verbdingung zur Datenbank her
    $pdo = getDatabaseConnection();

    # Erstelle ein neues Nutzer Objekt
    $userController = new UserController($pdo);

    # Wenn kein Nutzer vorhanden, dann gebe eine Fehlermeldung aus, sonst fahre fort mit der weitere Prüfung des Logins
    # Nutze UserController um den Login zu prüfen 

    # speichere ausgabe von Login
    $user = $userController->login($kennung, $password);

    if ($user === false) {
        # Wenn login Fehlschägt dann gebe Fehler aus
        $_SESSION['login_check'] = "error";
        $_SESSION['login_message'] = "Falscher Benutzername oder Passwort";
        header("Location: /public/index.php?page=login.php");
        exit();
    } else {
        # $user ist nicht false, also muss $user ein Nutzer Objekt sein. 
        $_SESSION['login_check'] = "success";
        $_SESSION['login_message'] = "Login erfolgreich";
        header("Location: /public/index.php?page=login");
        exit();
    }

    # TODO Ermögliche ein Erinnern der Session. 


} else {
    $message = "Falsche Anfrage Methode. Nutze ein POST Request. Kontaktiere den Server Administrator.";
    # Setze die Nachricht in die Session zur Ausgabe im Register Formular Wenn Fehlerhaft
    $_SESSION['login_message'] = $message;
    $_SESSION['login_check'] = "error";
    header("Location: /public/index.php?page=login");
    exit();
}
