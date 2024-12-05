<?php


/**
 * Kontroller, um Nutzerdaten aus der Datenbank zu laden und zu bearbeiten
 * 
 * @param PDO $db Das Datenbankverbindungsobjekt 
 */
class UserController
{
    # Definiere Variablen
    private $db;

    /**
     * Constructor
     *
     * @param PDO $pdo Das Datenbankverbindungsobjekt
     */
    public function __construct($pdo)
    {
        # Constructor - Also Funktion die aufgerufen wird, wenn die Klasse instanziiert wird
        $this->db = $pdo;
    }


    /**
     * Registriere einen Nutzer
     * 
     * @param string $name Der Name
     * @param string $username Der Nutzername
     * @param string $email Die Email
     * @param string $password Das Passwort im Klartext (wird gehasht)
     * @return array Nachricht als Rückgabe der Registrierung (Erfolg oder ggf. die Fehlermeldung)
     */
    public function register($name, $username, $email, $password, $categoryController)
    {
        # Registriere einen Nutzer
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

            # Führe die Abfrage aus, wenn erfolgreich, füge kategorien hinzu
            if ($stmt->execute()) {

                $user = $this->getUserByUsernameOrEmail($username);
                $user_id = $user["user_id"];


                # Füge die Standard Kategorien hinzu
                $categoryController->addDefaultCategories($user_id);

                $check = "success";
                $message = "Nutzer erfolgreich angelegt, Bitte loggen Sie sich ein.";
            } else {
                $check = "error";
                $message = "Fehler beim Anlegen des Nutzers: <br><br> Bitte versuchen Sie es erneut.";
            };


            return ["check" => $check, "message" => $message];

            # Wenn die Abfrage fehlschlägt dann gebe eine Fehlermedlung aus
        } catch (PDOException $e) {
            return ["check" => "error", "message" => "Fehler beim Anlegen des Nutzers: <br><br>" . $e->getMessage() . ".<br> <br>Bitte versuchen Sie es erneut."];
        }
    }

    /**
     * Login eines Nutzers  
     * 
     * @param string $kennung Die Kennung des Nutzers als Email oder als Nutzername
     * @param string $password Das Passwort des Nutzers
     * @return mixed Gibt das Array des Nutzer zurück wenn erfolgreich oder gibt FALSE zurück bei Fehlern
     */
    public function login($kennung, $password)
    {
        # Login eines Nutzers
        # Hole die Nutzerdaten mit der Email oder Nutzername aus der Datenbank
        $user = $this->getUserByUsernameOrEmail($kennung);

        if (!$user) {
            return false;
        }

        # Vergleiche das Passwort mit dem Passwort aus der Datenbank
        if (password_verify($password, $user['password_hash'])) {
            # Last Login updaten
            $this->updateLastLogin($user['user_id']);

            # Session Token mit 90 Zeichen erstellen / Expiry in 24h
            $token = bin2hex(random_bytes(32));
            $expiration = date('Y-m-d H:i:s', strtotime('+24 hours'));

            #SQl Ausführen
            try {

                $stmt = $this->db->prepare("UPDATE users SET session_token = :session_token, session_token_expiration = :session_token_expiration WHERE user_id = :user_id");
                $stmt->bindParam(':user_id', $user['user_id']);
                $stmt->bindParam(':session_token', $token);
                $stmt->bindParam(':session_token_expiration', $expiration);
                $stmt->execute();
            } catch (PDOException $e) {
                return false;
            }

            # Get updated User
            $user = $this->getUserById($user['user_id']);
            # Nutzerdaten zurückgeben
            return $user;
        } else {
            # Passwort stimmt nicht
            return false;
        }
    }

    /**
     * Aktualisiert die letzte Anmeldung eines Nutzers
     *
     * @param int $id
     * @return void
     */
    # Update LastLogin
    public function updateLastLogin($id)
    {
        $stmt = $this->db->prepare("UPDATE users SET last_login_at = NOW() WHERE user_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    /**
     * Holt alle Nutzer aus der Datenbank samt Daten. 
     *
     * @return array
     */
    # Lade alle Nutzer aus der Datenbank
    public function getUsers()
    {
        $stmt = $this->db->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * Holt einen Nutzer aus der Datenbank. 
     *
     * @param int $id Die ID des Nutzers
     * @return array
     */
    public function getUser($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE user_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    /**
     * Lade einen Nutzer aus der Datenbank anhand seiner Email
     * 
     * @param string $email
     * @return array
     */
    public function getUserByEmail($email)
    {
        # Lade einen Nutzer aus der Datenbank anhand seiner Email
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch();
    }

    /**
     * Lade einen Nutzer aus der Datenbank anhand seines Nutzernamens
     * 
     * @param string $username
     * @return array
     */
    public function getUserByUsername($username)
    {
        # Lade einen Nutzer aus der Datenbank anhand seiner Email
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        return $stmt->fetch();
    }

    /**
     * Lade einen Nutzer aus der Datenbank anhand seines Nutzernamens
     * 
     * @param int $userId
     * @return array
     */
    public function getUserById($userId)
    {
        # Lade einen Nutzer aus der Datenbank anhand seiner Email
        $stmt = $this->db->prepare("SELECT * FROM users WHERE user_id = :user_id");
        $stmt->bindParam(':user_id', $userId);
        $stmt->execute();
        return $stmt->fetch();
    }

    /**
     * Lade einen Nutzer aus der Datenbank anhand seiner Email ODER Nutzername
     * 
     * @param string $kennung
     * @return array
     */
    public function getUserByUsernameOrEmail($kennung)
    {
        # Lade einen Nutzer aus der Datenbank anhand seiner Email ODER Nutzername
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :kennung OR username = :kennung");
        $stmt->bindParam(':kennung', $kennung);
        $stmt->execute();
        return $stmt->fetch();
    }
}
