<?php
# 0. Importiere alle Nötigen Dateien
include_once __DIR__ . '/../config.php';
include_once BASE_PATH . '/app/config/database.php';

# Importiere die zu testende Controller
require_once BASE_PATH . '/app/controllers/WishlistController.php';
require_once BASE_PATH . '/app/controllers/WishController.php';

# 1. Erstelle die Datenbank Verbindung her und kreiere die Controller

try {
    # Stelle eine Verbdingung zur Datenbank her
    $pdo = getDatabaseConnection();
} catch (PDOException $e) {
    # Wenn die Verbindung fehlschlaegt gebe eine Fehlermeldung aus
    die("Database connection failed: " . $e->getMessage());
}


# Erstelle ein neues WishlistController Objekt
$wishlistController = new WishlistController($pdo);

# Erstelle ein neues WishController Objekt
$wishController = new WishController($pdo);


# 2. Test WishlistController methods
echo "Tests für WishlistController...\n\n";

# Wir benutzen den Testuser 1
$userID = 1;

# Erstelle ein neues Wishlist Objekt zum testen mit allen Feldern
$data = [
    'name' => 'Weihnachten',
    'description' => 'Items I want for the holidays',
    'targetDate' => '2024-12-25',
    'is_favorite' => true
];

# Erstelle die Wunschliste
echo "Teste: createWishlist...\n";
$newWishlistId = $wishlistController->createWishlist($userID, $data);
echo "\nNew Wishlist ID: $newWishlistId\n\n";

# Test: Hole die Wunschliste nach ID
echo "Teste: getWishlist...\n";
$wishlist = $wishlistController->getWishlist($newWishlistId);
print_r($wishlist);

# Test: Hole alle Wunschlisten eines Nutzers
echo "Teste: getWishlistsByUser...\n";
$wishlists = $wishlistController->getWishlistsByUser($userID);
print_r($wishlists);

# Test: Markiere die Wunschliste als Favorit
echo "Teste: markAsFavorite...\n";
echo "Markiere Wunschliste als Favorit...\n";
$wishlistController->markAsFavorite($userID, $newWishlistId, true);
$wishlist = $wishlistController->getWishlist($newWishlistId);
echo "Updated Wishlist Favorite Status: " . $wishlist['is_favorite'] . "\n";
echo "Markiere Wunschliste nicht als Favorit...\n";
$wishlistController->markAsFavorite($userID, $newWishlistId, false);
$wishlist = $wishlistController->getWishlist($newWishlistId);
echo "Updated Wishlist Favorite Status: " . $wishlist['is_favorite'] . "\n";

# Test: Lösche die Wunschliste
echo "Teste: deleteWishlist...\n";
$wishlistController->deleteWishlist($newWishlistId);
echo "Wunschliste mit ID $newWishlistId gelöscht.\n";

echo "✅ Tests erfolgreich durchgeführt für den WunschlistenController.\n\n";

# 3. Test WishController methods

echo "Tests für WishController...\n\n";
# Testdaten für den WishController
$wish_data = [
    'wishlist_id' => 9,
    'name' => 'Super Duper Geschenk',
    'description' => 'Mein wundertolstes Geschenk',
    'price' => 99.99,
    'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
    'category' => 'Elektronik'
];

# Erstelle ein Wunsch in der Datenbank
echo "Teste: addWish...\n";
$wishId = $wishController->addWish($wish_data['wishlist_id'], $wish_data);
echo "Wunsch mit ID $wishId hinzugefügt.\n";

# Test: Hole den Wunsch nach ID
echo "Teste: getWish...\n";
$wish = $wishController->getWish($wishId);
print_r($wish);

echo "✅ Tests erfolgreich durchgeführt für den WishController.\n\n";
