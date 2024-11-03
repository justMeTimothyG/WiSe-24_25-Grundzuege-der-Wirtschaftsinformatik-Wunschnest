<?php
require_once BASE_PATH . '/app/controllers/FavoriteTrait.php';
# Erstelle eine Klasse, die die Nutzerfunnktionen bereitstellt. 
class UserController
{
    # Lade Favoriten FUnktionen
    use FavoriteTrait;
    # Definiere Variablen
    private $db;

    # Constructor - Also Funktion die aufgerufen wird, wenn die Klasse instanziiert wird
    public function __construct($pdo)
    {
        $this->db = $pdo;
    }

    # Registriere einen Nutzer
    public function register($name, $username, $email, $password)
    {
        # Passwort Hashen - also unkenntlich in Datenbank speichern
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        # Füge Nutzer in die Datenbank ein
        try {

            # Erstelle die SQL Abfrage (SQL Statement)
            $stmt = $this->db->prepare("INSERT INTO users (name, username,  email, password_hash) VALUES (:name, :username, :email, :password_hash)");

            # Füge die Parameter in die Abfrage ein, auf diese art werden Injektions verhindert.
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password_hash', $hashedPassword);

            # Führe die Abfrage aus
            $stmt->execute();

            return "Ihr Nutzerkonto wurde erfolgreich angelegt!";

            # Wenn die Abfrage fehlschlägt dann gebe eine Fehlermedlung aus
        } catch (PDOException $e) {
            return "Fehler beim Anlegen des Nutzers: " . $e->getMessage() . "<br> <br>. Bitte versuchen Sie es erneut.";
        }
    }

    # Login eines Nutzers
    public function login($kennung, $password)
    {
        # Hole die Nutzerdaten mit der Email oder Nutzername aus der Datenbank
        $user = $this->getUserByUsernameOrEmail($kennung);

        if (!$user) {
            return false;
        }

        # Vergleiche das Passwort mit dem Passwort aus der Datenbank
        if (password_verify($password, $user['password_hash'])) {
            # Passwort stimmt
            return $user;
        } else {
            # Passwort stimmt nicht
            return false;
        }
    }

    # Lade alle Nutzer aus der Datenbank
    public function getUsers()
    {
        $stmt = $this->db->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    # Lade einen Nutzer aus der Datenbank anhand seiner ID
    public function getUser($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    # Lade einen Nutzer aus der Datenbank anhand seiner Email
    public function getUserByEmail($email)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch();
    }

    # Lade einen Nutzer aus der Datenbank anhand seiner Email
    public function getUserByUsername($username)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        return $stmt->fetch();
    }
    # Lade einen Nutzer aus der Datenbank anhand seiner Email ODER Nutzername
    public function getUserByUsernameOrEmail($kennung)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :kennung OR username = :kennung");
        $stmt->bindParam(':kennung', $kennung);
        $stmt->execute();
        return $stmt->fetch();
    }
}
