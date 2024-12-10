<?php

class ContactController
{
    private $db;

    public function __construct($pdo)
    {
        $this->db = $pdo;
    }

    /**
     * Füge eine Category hinzu.
     *
     * @param int $name Name der Kontaktanfrage
     * @param string $email Email der Anfrage 
     * @param string $message Der Inhalt der Kontakt anfrage
     * @return bool True, falls die Wunschliste favorisiert wurde
     */
    public function addContact($name, $email, $message)
    {
        # Füge einen Favorit hinzu 
        $stmt = $this->db->prepare("INSERT INTO contact (name, email, message) VALUES (:name, :email, :message)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);

        if ($stmt->execute()){
            return true;
        } else {
            return false;
        };
    }


    /**
     * Entferne eine Kontakt Anfrage 
     *
     * @param int $contact_id Die ID der Kategorie
     * @return bool True, falls der Favorit gelöscht wurde
     */
    public function removeContact($contact_id)
    {
        # Lösche ein Favorit aus der Favoriten Liste
        $stmt = $this->db->prepare("DELETE FROM contact WHERE contact_id = :contact_id");
        $stmt->bindParam(':contact_id', $contact_id);
        
        return $stmt->execute();
    }


    /**
     * Lade eine Kategorie anhand der ID
     *
     * @param int $contact_id ID der Anfrage
     * @return array Gib die Anfrage zuruck
     */
    public function getContactById($contact_id)
    {
        $stmt = $this->db->prepare("SELECT * FROM category WHERE contact_id = :contact_id");
        $stmt->bindParam(':contact_id', $contact_id);

        $stmt->execute();
        return $stmt->fetch();
    }

    /**
     * Hole alle kontaktanfragen
     * @return boolean/array False wenn fehlerhaft und die Daten wenn erfolgreich
     */
    public function getAllContacts($limit = 10)
    {
        $stmt = $this->db->prepare('SELECT * FROM contact LIMIT :limit');
        $stmt->bindParam(':limit', $limit);

        if ($stmt->execute()) {
            return $stmt->fetchAll();
        } else {
            return false;
        }
    }
}
