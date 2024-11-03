<?php

class WishlistController
{
    # Datenbank benötigt, also speichere die Datenbankverbindung als Eigenschaft
    private $db;

    public function __construct($pdo)
    {
        $this->db = $pdo;
    }


    ##################
    # GET Funktionen #
    ##################


    # Lade alle Wunschlisten aus der Datenbank
    public function getWishlists()
    {
        $stmt = $this->db->prepare("SELECT * FROM wishlist");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    # Lade eine Wunschliste aus der Datenbank anhand ihrer ID
    public function getWishlist($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM wishlist WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    # Lade alle Wunschlisten eines Nutzers aus der Datenbank
    public function getWishlistsByUser($user_id)
    {
        $stmt = $this->db->prepare("SELECT * FROM wishlist WHERE user_id = :user_id");
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    ##################
    # Create Funktionen #
    ##################

    # Erstelle eine neue Wunschliste
    public function createWishlist($user_id, $data)
    {
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

    # Markiere als Favorit oder nicht
    public function markAsFavorite($id, $bool)
    {
        $stmt = $this->db->prepare("UPDATE wishlist SET is_favorite = :is_favorite WHERE id = :id");
        $stmt->bindParam(':is_favorite', $bool);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    #####################
    # Delete Funktionen #
    #####################

    # Lösche eine Wunschliste
    public function deleteWishlist($id)
    {
        $stmt = $this->db->prepare("DELETE FROM wishlist WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
