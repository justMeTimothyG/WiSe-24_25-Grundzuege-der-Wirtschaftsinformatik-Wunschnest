<?php

# Lade Config Datei
include_once '../config.php';
# Lade Datenbank
include_once BASE_PATH . '/app/config/database.php';
# Lade Controller
include_once BASE_PATH . '/app/controllers/WishlistController.php';

# Initialisiere Datenbank und Controller
$pdo = getDatabaseConnection();
$wishlistController = new WishlistController($pdo);

# hole die Wishlist ID aus dem GET Parameter
$wishlist_id = $_GET['wishlist_id'];

# Setze die Wunschliste auf Öffentlich und prüfe, pb dies erfolgreich war. Gebe die entsprechende Nachricht weiter zum ausgeben an den Nutzer
if ($wishlistController->shareWishlist($wishlist_id)) {
    $_SESSION['message'] = "Die Wunschliste wurde erfolgreich geteilt.";
    $_SESSION['check'] = "success";
} else {
    $_SESSION['message'] = "Die Wunschliste konnte nicht geteilt werden.";
    $_SESSION['check'] = "error";
}

# Redirect zur Wunschliste
header("Location: /index.php?page=wishlist&wishlist_id=$wishlist_id");
exit();
