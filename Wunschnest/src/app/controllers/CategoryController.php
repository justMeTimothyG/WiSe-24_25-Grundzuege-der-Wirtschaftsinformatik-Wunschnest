<?php

class CategoryController
{
    private $db;

    public function __construct($pdo)
    {
        $this->db = $pdo;
    }

    /**
     * Füge eine Category hinzu.
     *
     * @param int $userId Die ID des Nutzers
     * @param int $name Name der Kategorie
     * @return bool True, falls die Wunschliste favorisiert wurde
     */
    public function addCategory($userId, $name)
    {
        # Füge einen Favorit hinzu 
        $stmt = $this->db->prepare("INSERT INTO category (user_id, name) VALUES (:user_id, :name)");
        $stmt->bindParam(':user_id', $userId);
        $stmt->bindParam(':name', $name);

        return $stmt->execute();
    }

    /**
     * Fügt Standard Kategorien hinzu
     *
     * @param int $userId Die ID des Nutzers
     * @return bool True, falls die Wunschliste favorisiert wurde
     */
    public function addDefaultCategories($userId)
    {
        # Erstelle die Standard Kategorien für einen Nutzer
        $default_categories = [
            "Elektronik",
            "Gesundheit",
            "Gutscheine",
            "Kleidung",
            "Sport",
            "Wohnen",
            "Sonstiges"
        ];

        # String für SQL Statement bauen, Gehe durch jede Category und baue das Statement dynamisch mit einem Index
        $placeholders = [];
        $params = [];

        foreach ($default_categories as $index => $categoryName) {
            $placeholders[] = "(:user_id, :name{$index})";
            $params[":user_id"] = $userId;
            $params[":name{$index}"] = $categoryName;
        }

        $sql = "INSERT INTO category (user_id, name) VALUES " . implode(", ", $placeholders);


        $stmt_categories = $this->db->prepare($sql);

        # Ausführen mit den Parameter
        return $stmt_categories->execute($params);
    }

    /**
     * Entferne eine Category 
     *
     * @param int $categoryId Die ID der Kategorie
     * @return bool True, falls der Favorit gelöscht wurde
     */
    public function removeCategory($categoryId)
    {
        # Lösche ein Favorit aus der Favoriten Liste
        $stmt = $this->db->prepare("DELETE FROM category WHERE category_id = :category_id");
        $stmt->bindParam(':category_id', $categoryId);

        return $stmt->execute();
    }

    /**
     * Lade alle Favoriten eines Nutzers
     *
     * @param int $userId ID des Nutzers
     * @return boolean Gibt Wahrheitswert zurück, ob das Update funktioniert hat. 
     */
    public function updateCategory($categoryId, $newname)
    {
        $stmt = $this->db->prepare("UPDATE category SET name = :name WHERE category_id = :category_id");
        $stmt->bindParam(':category_id', $categoryId);
        $stmt->bindParam(':name', $newname);

        return $stmt->execute();
    }

    /**
     * Lade alle Kategorien eines Nutzers mit Anzahl der Wünsche
     *
     * @param int $userId ID des Nutzers
     * @return array Gibt ein Array der Kategorien zuruck
     */
    public function getCategoriesByUser($userId)
    {
        # Holle alle Kategorien eines Nutzers - Gebe direkt die Anzahl an Wünschen für eine Jeweilige Kategorie zurück
        $stmt = $this->db->prepare("SELECT C.*, COUNT(w.wish_id) AS wish_count FROM category C LEFT JOIN wish W ON C.category_id = W.category_id WHERE C.user_id = :user_id GROUP BY C.category_id, c.name ORDER BY C.name DESC");
        $stmt->bindParam(':user_id', $userId);

        $stmt->execute();
        return $stmt->fetchAll();
    }
}
