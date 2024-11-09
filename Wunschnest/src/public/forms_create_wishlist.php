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
    $description = isset($_POST['description']) ? trim($_POST['description']) : null;
    $target_date = isset($_POST['target-date']) ? trim($_POST['target-date']) : null;
    $is_favorite = isset($_POST['favorite']) ? trim($_POST['favorite']) : false;

    # Erstelle aus Date Objekte aus Datumseingabe 
    # Prüfe ob Eingabe gut formatiert ist
    if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $target_date)) {
        $_SESSION['check'] = "error";
        $_SESSION['message'] = "Datum muss vollständig eingegeben sein.";
        header("Location: /index.php?page=create&type=wishlist");
        exit();
    }
    $date = DateTime::createFromFormat('Y-m-d', $target_date);
    $target_date = $date->format('Y-m-d');

    # Prüfe ob alle notwendigen Daten vorhanden sind
    if (empty($name)) {
        $_SESSION['check'] = "error";
        $_SESSION['message'] = "Gebe bitte mindestens einen Namen an.";
        header("Location: /index.php?page=create&type=wishlist");
        exit();
    }

    # Erzeuge einen Share Token
    $token = bin2hex(random_bytes(32));

    # Bereite die Daten für die Datenbank vor
    $datafields = [
        "name",
        "description",
        "target_date",
        "is_favorite",
        "share-token"
    ];

    $data = array_combine($datafields, [$name, $description, $target_date, $is_favorite, $token]);
    $user_id = $userController->getUserByUsername($_SESSION['username'])['user_id'];

    # Schreibe den Wunsch in die Datenbank
    $wishlist_id = false;
    $test = $wishlistController->createWishlist($user_id, $data);

    if ($wishlist_id != false) {

        # Setze die Nachricht in die Session zur Ausgabe in der Wunschliste
        $_SESSION['message'] = "Wunschliste erfolgreich erstellt.";
        $_SESSION['check'] = "success";

        header("Location: /index.php?page=wishlist&wishlist_id=" . '1');
        exit();
    } else {
        $_SESSION['message'] = 'Fehler beim Erstellen der Wunschliste. Bitte erneut versuchen. wishlist id:' . $test . ' data:' . json_encode($data);
        $_SESSION['check'] = "error";
        header("Location: /index.php?page=create&type=wishlist");
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
