<?php
require_once BASE_PATH . '/app/controllers/FavoriteTrait.php';

/**
 * Controller für die Wunschlisten
 * 
 * 
 */
class WishlistController
{
    # Lade Favoriten FUnktionen
    use FavoriteTrait;
    # Datenbank benötigt, also speichere die Datenbankverbindung als Eigenschaft
    private $db;

    /**
     * Contructor
     *
     * @param PDO $pdo Das Datenbankverbindungsobjekt zur Datenbank
     */
    public function __construct($pdo)
    {
        $this->db = $pdo;
    }


    ##################
    # GET Funktionen #
    ##################

    /**
     * Hole alle Wunschlisten die es in der Datenbank gibt.
     *
     * @return array Gibt ein Array der Wunschlisten zurück
     */
    public function getWishlists()
    {
        # Lade alle Wunschlisten aus der Datenbank
        $stmt = $this->db->prepare("SELECT * FROM wishlist");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * Lade eine Wunschliste aus der Datenbank anhand ihrer ID
     *
     * @param int $id Die ID der Wunschliste
     * @return array Gibt ein Array der Wunschliste zuruck
     */
    public function getWishlist($id)
    {
        # Lade eine Wunschliste aus der Datenbank anhand ihrer ID
        $stmt = $this->db->prepare("SELECT * FROM wishlist WHERE wishlist_id = :wishlist_id");
        $stmt->bindParam(':wishlist_id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    /**
     * Lade alle Wunschlisten eines Nutzers
     *
     * @param int $user_id ID des Nutzers
     * @return array Gibt ein Array der Wunschlisten zuruck
     */
    public function getWishlistsByUser($user_id)
    {
        # Lade alle Wunschlisten eines Nutzers aus der Datenbank
        $stmt = $this->db->prepare("SELECT * FROM wishlist WHERE user_id = :user_id");
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    ##################
    # Create Funktionen #
    ##################

    /**
     * Erstelle eine neue Wunschliste
     *
     * @param int $user_id ID des Nutzers
     * @param array $data
     * - name (string): Name der Wunschliste
     * - description (string): Beschreibung der Wunschliste
     * - is_favorite (boolean): Ist die Wunschliste favorisiert
     * - targetDate (string): Ziel Datum der Wunschliste
     * @return void
     */
    public function createWishlist($user_id, $data)
    {
        # Erstelle eine neue Wunschliste
        # Lade die Daten falls es unausgefüllte Felder gibt die NULL sein dürfen
        $description = isset($data['description']) && !empty($data['description']) ? $data['description'] : null;
        $is_favorite = isset($data['is_favorite']) && !empty($data['is_favorite']) ? $data['is_favorite'] : false;

        # Formatiere das Datum vor dem einfügen der Wunschliste
        # Prüfe ob target Date überhaupt gesetzt worden ist und nicht leer ist
        $targetDate = isset($data['targetDate']) && !empty($data['targetDate']) ? $data['targetDate'] : null;

        # Wenn es ein Fatum gibt, dann formatieren
        if ($targetDate) {
            # Formatieren ins Format YYYY-MM-DD 
            $targetDate = date('Y-m-d', strtotime($targetDate));
        }

        # Erstelle die SQL Abfrage (SQL Statement)
        $stmt = $this->db->prepare("INSERT INTO wishlist (user_id, name, description, target_date, is_favorite) VALUES (:user_id, :name, :description, :targetDate, :is_favorite)");

        # Füge die Parameter in die Abfrage ein, auf diese art werden Injektions verhindert.
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':targetDate', $targetDate);
        $stmt->bindParam(':is_favorite', $is_favorite);
        $stmt->execute();

        # Gebe die zuletzt eingefügte Zeilen ID zurück
        return $this->db->lastInsertId();
    }

    #####################
    # Update Funktionen #
    #####################

    /**
     * Markiere eine Wunschliste als favorisiert. 
     *
     * @param int $userID ID des Nutzers
     * @param int $wishlistID ID der Wunschliste
     * @param bool $bool True, falls die Wunschliste favorisiert ist
     * @return void
     */
    public function markAsFavorite($userID, $wishlistID, $bool)
    {
        # Markiere als Favorit oder nicht
        # Nutzer hierfür die Funktionen aus der Favoriten Trait
        if ($bool) {
            $this->addFavorite($userID, $wishlistID);
        } else {
            $this->removeFavorite($userID, $wishlistID);
        }
    }

    #####################
    # Delete Funktionen #
    #####################

    /**
     * Loescht eine Wunschliste
     *
     * @param int $id Die ID der Wunschliste
     * @return bool True, falls die Wunschliste gelöscht wurde
     */
    public function deleteWishlist($id)
    {
        # Lösche eine Wunschliste
        $stmt = $this->db->prepare("DELETE FROM wishlist WHERE wishlist_id = :wishlist_id");
        $stmt->bindParam(':wishlist_id', $id);
        return $stmt->execute();
    }
}
