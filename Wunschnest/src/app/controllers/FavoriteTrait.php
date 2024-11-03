<?php
trait FavoriteTrait
{
    private $db;

    public function __construct($pdo)
    {
        $this->db = $pdo;
    }

    # Füge einen Favorit hinzu 
    public function addFavorite($userId, $wishlistId)
    {
        $stmt = $this->db->prepare("INSERT INTO FAVORITE (user_id, wishlist_id) VALUES (?, ?)");
        return $stmt->execute([$userId, $wishlistId]);
    }

    # Lösche ein Favorit aus der Favoriten Liste
    public function removeFavorite($userId, $wishlistId)
    {
        $stmt = $this->db->prepare("DELETE FROM FAVORITE WHERE user_id = ? AND wishlist_id = ?");
        return $stmt->execute([$userId, $wishlistId]);
    }

    # Hole alle Favoriten eines Nutzers
    public function getFavoritesByUser($userId)
    {
        # Lade alle Wunschlisten eines Nutzers
        # SQL Statement Erläuterung
        # Hole Alle Wunschlisten Infos aus der Datenbank
        # aus der Verbundenen Tabelle FAVORITE und WISHLIST die durch WIHSLIST_ID verbunden wird
        # Filtere nur die Einträge des angegebenen Nutzers
        $stmt = $this->db->prepare("SELECT W.* FROM FAVORITE F JOIN WISHLIST W ON F.wishlist_id = W.wishlist_id WHERE F.user_id = :user_id");
        $stmt->bindParam(':user_id', $userId);

        $stmt->execute();
        return $stmt->fetchAll();
    }
}
