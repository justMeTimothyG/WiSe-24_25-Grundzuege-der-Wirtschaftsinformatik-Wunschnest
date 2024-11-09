<?php

/**
 * Class WishController
 * 
 * Verwaltet die typischen Bearbeitungen mit Wünschen (CRUD)
 * 
 * @property PDO $db Das Datenbankverbindungsobjekt.
 */
class WishController
{
    private $db;

    /**
     * WishController constructor.
     *
     * @param PDO $pdo
     */
    public function __construct($pdo)
    {
        $this->db = $pdo;
    }

    /**
     * Fügt einen Wunsch in die Datenbank hinzu.
     * 
     * @param int $wishlistId Die ID der Wunschliste
     * @param array $data die Daten des Wunsches (Assoziatives Array)
     *      - name (string): Name des Wunsches
     *      - description (string): Beschreibung
     *      - url (string): URL des Wunsches
     *      - category (string): Kategorie des Wunsches
     *      - price (float): Preis
     * @return int Die ID des erstellten Wunsches
     */
    public function addWish($wishlistId, $data)
    {
        # Lade die Daten falls es unausgefüllte Felder geben die NULL sein können
        $description = isset($data['description']) && !empty($data['description']) ? $data['description'] : null;
        $name = isset($data['name']) && !empty($data['name']) ? $data['name'] : null;
        # Setze den Presi auf Null wenn nicht vorhanden
        $price = isset($data['price']) && !empty($data['price']) ? $data['price'] : null;
        $url = isset($data['url']) && !empty($data['url']) ? $data['url'] : null;
        $category_id = isset($data['category']) && !empty($data['category']) ? $data['category'] : null;

        # Erstelle die SQL Abfrage (SQL Statement)
        $stmt = $this->db->prepare("INSERT INTO WISH (wishlist_id, name, description, price, url, category_id) VALUES (:wishlist_id, :name, :description, :price, :url, :category_id)");

        # Füge die Parameter in die Abfrage ein, auf diese art werden Injektions verhindert.
        $stmt->bindParam(':wishlist_id', $wishlistId);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':url', $url);
        $stmt->bindParam(':category_id', $category_id);

        # Führe die Abfrage aus und gebe die ID zurueck
        $stmt->execute();

        return $this->db->lastInsertId();
    }

    /**
     * Holt die Daten für einen Wish anhand seiner ID
     *
     * @param int $wish_id
     * @return array 
     */
    function getWish($wish_id)
    {
        # Hole anhand der ID die Daten für einen Wish
        $stmt = $this->db->prepare("SELECT * FROM WISH WHERE wish_id = :wish_id");
        $stmt->bindParam(':wish_id', $wish_id);
        $stmt->execute();

        return $stmt->fetch();
    }

    /**
     * Hole alle Wünsche für eine Wunschliste anhand der Wunschlisten ID
     *
     * @param int $wishlistId
     * @return array Gibt ein Array der Wünsche zurück
     */
    public function getWishesByWishlist($wishlistId)
    {
        # Lade alle Wunschlisten eines Nutzers
        $stmt = $this->db->prepare("SELECT * FROM WISH WHERE wishlist_id = ?");
        $stmt->bindParam(':wishlist_id', $wishlistId);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * Aktualisiere einen Wunsch
     *
     * @param int $wishId
     * @param array $data
     * @return array Gibt das Array des Wunsches zurück
     */
    public function updateWish($wishId, $data = [])
    {
        # Einen Wunsch updaten
        # Falls keine Daten geliefert werden einfach nichts zurück geben
        if (empty($data)) {
            return false;
        }

        # Baue den SQL String dynamisch
        $fields = [];
        $values = [];

        # Gehe durch alle Werte und Speichere den Teilstring
        foreach ($data as $key => $value) {
            $fields[] = "$key = :$key";
            $values["$key"] = $value;
        }

        # Füge die Strings zusammen
        $setClause = implode(', ', $fields);

        # Erstelle die SQL Abfrage (SQL Statement)
        $stmt = $this->db->prepare("UPDATE WISH SET $setClause WHERE wish_id = :wish_id");

        # Füge die Parameter in die Abfrage ein, auf diese art werden Injektions verhindert.
        $stmt->bindParam(':wish_id', $wishId);
        foreach ($values as $key => $value) {
            $stmt->bindParam(":$key", $value);
        }

        # Ausführen
        $stmt->execute();

        # Gebe das Element zurück
        return $this->db->lastInsertId();

        # TODO als TRY CATCH umbauen, damit kein Fehler entsteht bei Problemen
    }

    /**
     * Aktualisiert den Status des Wunsches, wenn ein Wunsch erfüllt wird oder setzt es zurück wenn die Erfüllung storniert wird. 
     *
     * @param int $wishId Die ID des Wunsches das zu bearbeiten ist.
     * @param bool $isFulfilled WAHR um den Wunsch zu erfüllen, oder FALSCH um ihn zurückzusetzen 
     * @param string $fullfilledBy (Optional)Der Name der Person, die den Wunsch erfüllt hat
     * @return bool Gibt den Erfolg des Updates zurueck
     */
    public function updateWishStatus($wishId, $isFulfilled, $fullfilledBy = null)
    {
        # Einen Wunsch Status aktualisieren
        # Wenn erfüllt
        if ($isFulfilled) {
            $stmt = $this->db->prepare("UPDATE WISH SET is_fulfilled = 1, fullfilled_by = :fullfilled_by, fullfilled_at = NOW() WHERE wish_id = :wish_id");
        } else {
            $stmt = $this->db->prepare("UPDATE WISH SET is_fulfilled = 0, fullfilled_by = :fullfilled_by, fullfilled_at = NULL WHERE wish_id = :wish_id");
        }

        # Füge die Parameter in die Abfrage ein, auf diese art werden Injektions verhindert.
        $stmt->bindParam(':wish_id', $wishId);
        $stmt->bindParam(':fullfilled_by', $fullfilledBy);

        # Führe die Abfrage aus
        return $stmt->execute();
    }

    /**
     * Lösche einen Wunsch
     *
     * @param int $wishId Die ID des Wunsches
     * @return bool
     */
    public function deleteWish($wishId)
    {
        # Wunsch Löschen
        $stmt = $this->db->prepare("DELETE FROM WISH WHERE wish_id = :wish_id");
        $stmt->bindParam('wish_id', $wishId);

        return $stmt->execute();
    }
}
