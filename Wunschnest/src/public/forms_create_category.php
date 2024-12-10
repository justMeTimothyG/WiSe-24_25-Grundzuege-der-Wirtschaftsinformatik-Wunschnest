<?php
include_once '../config.php';
include_once BASE_PATH . '/app/config/database.php';

# Importiere die Controller, um besser die Daten zu verarbeiten
include_once BASE_PATH . '/app/controllers/WishlistController.php';
include_once BASE_PATH . '/app/controllers/UserController.php';
include_once BASE_PATH . '/app/controllers/CategoryController.php';
include_once BASE_PATH . '/app/controllers/WishController.php';


# Initialisiere Datenbank und Controller
$pdo = getDatabaseConnection();
$wishlistController = new WishlistController($pdo);
$userController = new UserController($pdo);
$categoryController = new CategoryController($pdo);
$wishController = new WishController($pdo);


# Starte eine Session, wenn nicht schon vorhanden
session_start();


# Prüfe ob ein Post Request vorliegt, ansonsten gebe einen Fehler aus
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    # Hole die Daten aus dem Formular und Bereinige diese
    $name = isset($_POST['name']) ? trim($_POST['name']) : null;


    # Prüfe ob alle notwendigen Daten vorhanden sind
    if (empty($name)) {
        $_SESSION['check'] = "error";
        $_SESSION['message'] = "Gebe bitte einen Namen an.";
        header("Location: /index.php?page=create&type=category");
        exit();
    }

    $user_id = $userController->getUserByUsername($_SESSION['username'])['user_id'];

    # Category einfügen
    $success = $categoryController->addCategory($user_id, $name);

    if ($success) {

        # Setze die Nachricht in die Session zur Ausgabe in der Wunschliste
        $_SESSION['message'] = "Category erfolgreich erstellt.";
        $_SESSION['check'] = "success";

        header("Location: /index.php?page=dashboard");
        exit();
    } else {
        $_SESSION['message'] = 'Fehler beim Erstellen der Category. Bitte erneut versuchen.';
        $_SESSION['check'] = "error";
        header("Location: /index.php?page=create&type=category");
        exit();
    }
} else {
    $message = "Falsche Anfrage Methode. Nutze ein POST Request. Kontaktiere den Server Administrator.";
    # Setze die Nachricht in die Session zur Ausgabe im Register Formular Wenn Fehlerhaft
    $_SESSION['message'] = $message;
    $_SESSION['check'] = "error";
    header("Location: /index.php?page=dashboard");
    exit();
}
