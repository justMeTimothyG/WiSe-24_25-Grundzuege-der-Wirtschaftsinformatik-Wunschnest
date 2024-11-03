<?php
trait FavoriteTrait
{
    private $db;

    public function __construct($pdo)
    {
        $this->db = $pdo;
    }

    /**
     * Favorisiere eine Wunschliste und füge es in die Tabelle der Favoriten hinzu.
     *
     * @param int $userId
     * @param int $wishlistId
     * @return bool True, falls die Wunschliste favorisiert wurde
     */
    public function addFavorite($userId, $wishlistId)
    {
        # Füge einen Favorit hinzu 
        $stmt_favorite = $this->db->prepare("INSERT INTO FAVORITE (user_id, wishlist_id) VALUES (:user_id, :wishlist_id)");
        $stmt_favorite->bindParam(':user_id', $userId);
        $stmt_favorite->bindParam(':wishlist_id', $wishlistId);

        # Ändere den Eintrag `is_favorite` der Wunschliste auf 1
        $stmt_wishlist = $this->db->prepare("UPDATE WISHLIST SET is_favorite = 1 WHERE wishlist_id = :wishlist_id");
        $stmt_wishlist->bindParam(':wishlist_id', $wishlistId);

        return $stmt_favorite->execute() && $stmt_wishlist->execute();
    }

    /**
     * Entferne einen Favorit aus der Tabelle der Favoriten
     *
     * @param int $userId Die ID des Nutzers
     * @param int $wishlistId Die ID der Wunschliste
     * @return bool True, falls der Favorit gelöscht wurde
     */
    public function removeFavorite($userId, $wishlistId)
    {
        # Lösche ein Favorit aus der Favoriten Liste
        $stmt_favorite = $this->db->prepare("DELETE FROM FAVORITE WHERE user_id = :user_id AND wishlist_id = :wishlist_id");
        $stmt_favorite->bindParam(':user_id', $userId);
        $stmt_favorite->bindParam(':wishlist_id', $wishlistId);

        # Ändere den Eintrag `is_favorite` der Wunschliste auf 0
        $stmt_wishlist = $this->db->prepare("UPDATE WISHLIST SET is_favorite = 0 WHERE wishlist_id = :wishlist_id");
        $stmt_wishlist->bindParam(':wishlist_id', $wishlistId);

        return $stmt_favorite->execute() && $stmt_wishlist->execute();
    }

    /**
     * Lade alle Favoriten eines Nutzers
     *
     * @param int $userId ID des Nutzers
     * @return array Gibt ein Array der Wunschlisten zuruck
     */
    public function getFavoritesByUser($userId)
    {
        # Hole alle Favoriten eines Nutzers


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
