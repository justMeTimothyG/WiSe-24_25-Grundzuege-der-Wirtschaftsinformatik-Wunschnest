<?php
class WishController
{
    private $db;

    public function __construct($pdo)
    {
        $this->db = $pdo;
    }

    # Füge einen Wunsch hinzu
    public function addWish($wishlistId, $data)
    {
        # Lade die Daten falls es unausgefüllte Felder geben die NULL sein können
        $description = isset($data['description']) && !empty($data['description']) ? $data['description'] : null;
        # Setze den Presi auf Null wenn nicht vorhanden
        $price = isset($data['price']) && !empty($data['price']) ? $data['price'] : null;
        $url = isset($data['url']) && !empty($data['url']) ? $data['url'] : null;
        $category = isset($data['category']) && !empty($data['category']) ? $data['category'] : null;

        # Erstelle die SQL Abfrage (SQL Statement)
        $stmt = $this->db->prepare("INSERT INTO WISH (wishlist_id, description, price, url, category) VALUES (?, ?, ?, ?, ?)");

        # Füge die Parameter in die Abfrage ein, auf diese art werden Injektions verhindert.
        $stmt->bindParam(':wishlist_id', $wishlistId);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':url', $url);
        $stmt->bindParam(':category', $category);

        # Führe die Abfrage aus und gebe die ID zurueck
        $stmt->execute();

        return $this->db->lastInsertId();
    }

    # Lade alle Wunschlisten eines Nutzers
    public function getWishesByWishlist($wishlistId)
    {
        $stmt = $this->db->prepare("SELECT * FROM WISH WHERE wishlist_id = ?");
        $stmt->bindParam(':wishlist_id', $wishlistId);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    # Einen Wunsch updaten
    public function updateWish($wishId, $data = [])
    {
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

        return $stmt->execute();
    }

    # Einen Wunsch Status aktualisieren
    public function updateWishStatus($wishId, $isFulfilled, $fullfilledBy = null)
    {
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

    # Wunsch Löschen
    public function deleteWish($wishId)
    {
        $stmt = $this->db->prepare("DELETE FROM WISH WHERE wish_id = ?");
        return $stmt->execute([$wishId]);
    }
}
