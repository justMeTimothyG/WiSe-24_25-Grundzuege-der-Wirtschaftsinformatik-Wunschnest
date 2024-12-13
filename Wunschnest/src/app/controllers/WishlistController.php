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
        $list = $stmt->fetch();

        # Hole die Anzahl an Geschenken der Wunschliste und füge dies in das Array ein
        $stmt = $this->db->prepare("SELECT COUNT(*) AS count FROM wish WHERE wishlist_id = :wishlist_id");
        $stmt->bindParam(':wishlist_id', $id);
        $stmt->execute();
        $list['wish_count'] = $stmt->fetch()['count'];

        return $list;
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
        // $stmt = $this->db->prepare("SELECT * FROM wishlist WHERE user_id = :user_id");
        $stmt = $this->db->prepare("SELECT w.*, COUNT(wi.wishlist_id) AS wish_count FROM wishlist w LEFT JOIN wish wi ON w.wishlist_id = wi.wishlist_id WHERE user_id = :user_id GROUP BY w.wishlist_id ORDER BY  w.target_date IS NULL ASC, w.target_date DESC");
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * Lade alle archivierten Wunschlisten eines Nutzers
     *
     * @param int $user_id ID des Nutzers
     * @return array Gibt ein Array der Wunschlisten zuruck
     */
    public function getArchivedWishlistsByUser($user_id)
    {
        # Lade alle Wunschlisten eines Nutzers aus der Datenbank
        // $stmt = $this->db->prepare("SELECT * FROM wishlist WHERE user_id = :user_id");
        $stmt = $this->db->prepare("SELECT w.*, COUNT(wi.wishlist_id) AS wish_count FROM wishlist w LEFT JOIN wish wi ON w.wishlist_id = wi.wishlist_id WHERE user_id = :user_id AND is_archived = 1 GROUP BY w.wishlist_id ORDER BY  w.target_date IS NULL ASC, w.target_date DESC");
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * Lade eine Wunschliste aus der Datenbank anhand ihrer ID
     *
     * @param string $token Der Token zum teilen der Liste
     * @return array Gibt ein Array der Wunschliste zuruck
     */
    public function getWishlistBySharetoken($token)
    {
        # Get the id of the share token
        $stmt = $this->db->prepare('SELECT wishlist_id FROM wishlist WHERE share_token = :share_token');
        $stmt->bindParam(':share_token', $token);
        $stmt->execute();
        $id = $stmt->fetch()['wishlist_id'];

        $result = $this-> getWishlist($id);

        return $result;
    }

    /**
     * Lade alle Statistike aus der Wunschliste eines Nutzer
     *
     * @param int $user_id ID des Nutzers
     * @return array Gibt ein Array der Statistiken zuruck
     * - wishlist_count (int): Anzahl der Wunschlisten
     * - wish_count (int): Anzahl der Geschenken
     * - shared_count (int): Anzahl der geteilten Wunschlisten
     * - archived_count (int): Anzahl der Archivierten Wunschlisten
     */
    public function getStatsByUser($user_id)
    {
        # Lade alle Statistike aus der Wunschliste eines Nutzer
        # Anzahl der Listen, Anzahl aller Wünsche eines Nutzer, Anzahl der geteilten Listen, Anzahl der Archivierten Listen
        $stmt = $this->db->prepare("SELECT COUNT(*) AS wishlist_count, SUM(wish_count) AS wish_count, COUNT(CASE WHEN is_public = 1 THEN 1 END) AS shared_count, COUNT(CASE WHEN is_archived = 1 THEN 1 END) AS archived_count FROM wishlist w LEFT JOIN (SELECT wishlist_id, COUNT(*) AS wish_count FROM wish GROUP BY wishlist_id) wi ON w.wishlist_id = wi.wishlist_id WHERE user_id = :user_id");
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();
        return $stmt->fetch();
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
     * - share_token (string): Share Token der Wunschliste (64 Zeichen)
     * @return mixed Gibt die ID der Wunschliste zuruck oder false bei Fehler.
     */
    public function createWishlist($user_id, $data)
    {
        # Erstelle eine neue Wunschliste
        # Lade die Daten falls es unausgefüllte Felder gibt die NULL sein dürfen
        $description = isset($data['description']) && !empty($data['description']) ? $data['description'] : null;
        $is_favorite = isset($data['is_favorite']) && !empty($data['is_favorite']) ? $data['is_favorite'] : 0;

        # Formatiere das Datum vor dem einfügen der Wunschliste
        # Prüfe ob target Date überhaupt gesetzt worden ist und nicht leer ist
        $targetDate = isset($data['target_date']) && !empty($data['target_date']) ? $data['target_date'] : null;

        # Wenn es ein Datum gibt, dann formatieren
        if ($targetDate) {
            # Formatieren ins Format YYYY-MM-DD 
            $targetDate = date('Y-m-d', strtotime($targetDate));
        }
        try {
            # Erstelle die SQL Abfrage (SQL Statement)
            $stmt = $this->db->prepare("INSERT INTO wishlist (user_id, name, description, target_date, is_favorite, share_token) VALUES (:user_id, :name, :description, :targetDate, :is_favorite, :share_token)");

            # Füge die Parameter in die Abfrage ein, auf diese art werden Injektions verhindert.
            $stmt->bindParam(':user_id', $user_id);
            $stmt->bindParam(':name', $data['name']);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':targetDate', $targetDate);
            $stmt->bindParam(':is_favorite', $is_favorite);
            $stmt->bindParam(':share_token', $data['share_token']);
            $stmt->execute();
        } catch (Exception $e) {
            # Gebe Fehlermeldung aus
            return $e->getMessage();
        }
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

    /**
     * Markiere eine Wunschliste als öffentlich
     *
     * @param int $wishlistID Die ID der Wunschliste
     * @return bool True, falls die Wunschliste markiert wurde
     */
    public function shareWishlist($wishlistID)
    {
        $stmt = $this->db->prepare("UPDATE wishlist SET is_public = 1 WHERE wishlist_id = :wishlist_id");
        $stmt->bindParam(':wishlist_id', $wishlistID);
        return $stmt->execute();
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
