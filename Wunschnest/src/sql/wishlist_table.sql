-- Erstelle Datenbank wenn sie noch nicht existiert
CREATE DATABASE IF NOT EXISTS wunschnest_db;

-- Verwede Datenbank
USE wunschnest_db;

-- Erstelle die `wishlist` Tabelle, wenn sie noch nicht existiert
CREATE TABLE IF NOT EXISTS wishlist (
    -- PK wird automatisch erstellt
    wishlist_id INT AUTO_INCREMENT PRIMARY KEY,
    -- Zuordnung zu einem User anhand der id
    user_id INT NOT NULL,
    -- Bezeichnung der Wunschliste
    name VARCHAR(255) NOT NULL,
    -- Beschreibung der Wunschliste
    description TEXT,
    -- Zieldatum der Wünsche, Muss nicht verfügbar sein. Bsp. Allgemeine Liste
    target_date DATE,
    -- Favorit oder nicht -> Zum speichern in der Seitenleiste
    is_favorite BOOLEAN DEFAULT FALSE,
    -- Ob die Liste archiviert ist
    is_archived BOOLEAN DEFAULT FALSE,
    -- Freigegeben oder nicht 
    is_public BOOLEAN DEFAULT FALSE,
    -- Token für die Freigabe der Wunschliste
    share_token VARCHAR(64) DEFAULT NULL,
    -- Datum, zu der der Eintrag erstellt wurde
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    -- Zuordnung zu einem User, lösche alle Daten, wenn der User gelöscht wird
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);

