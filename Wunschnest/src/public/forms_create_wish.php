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
    $url = trim($_POST['url'] ?? null);
    $name = trim($_POST['name'] ?? null);
    $price = trim($_POST['price'] ?? null);
    $category_id = trim($_POST['category'] ?? null);
    $wishlist_id = trim($_POST['wishlist'] ?? null);
    $description = trim($_POST['description'] ?? null);

    # Erstelle aus INT Werten auch zahlen 
    $price = floatval($price);
    $category_id = intval($category_id);
    $wishlist_id = intval($wishlist_id);

    # Prüfe ob alle notwendigen Daten vorhanden sind
    if (empty($name) || empty($wishlist_id)) {
        $_SESSION['check'] = "error";
        $_SESSION['message'] = "Bitte alle Felder ausfüllen.";
        header("Location: /index.php?page=create&type=wish");
        exit();
    }

    # Bereite die Daten für die Datenbank vor
    $datafields = [
        "name",
        "description",
        "url",
        "category_id",
        "price"
    ];

    $data = array_combine($datafields, [$name, $description, $url, $category_id, $price]);

    # Schreibe den Wunsch in die Datenbank
    $wishController->addWish($wishlist_id, $data);

    # Setze die Nachricht in die Session zur Ausgabe in der Wunschliste
    $_SESSION['message'] = "Wunsch erfolgreich erstellt.";
    $_SESSION['check'] = "success";

    header("Location: /index.php?page=wishlist&wishlist_id=" . $wishlist_id);
    exit();
} else {
    $message = "Falsche Anfrage Methode. Nutze ein POST Request. Kontaktiere den Server Administrator.";
    # Setze die Nachricht in die Session zur Ausgabe im Register Formular Wenn Fehlerhaft
    $_SESSION['message'] = $message;
    $_SESSION['check'] = "error";
    header("Location: /index.php?page=dashboard");
    exit();
}
