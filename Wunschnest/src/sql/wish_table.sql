-- Erstelle Datenbank wenn sie noch nicht existiert
CREATE DATABASE IF NOT EXISTS wunschnest_db;

-- Verwede Datenbank
USE wunschnest_db;

-- Erstelle die `wish` Tabelle, wenn sie noch nicht existiert
CREATE TABLE WISH (
    -- PK wird automatisch erstellt
    wish_id INT PRIMARY KEY AUTO_INCREMENT,
    -- Zuordnung zu einer Wunschliste anhand der id
    wishlist_id INT NOT NULL,
    -- Bezeichnung des Wunsches
    name VARCHAR(255) NOT NULL,
    -- Preis des Wunsches
    price DECIMAL(10, 2) DEFAULT 0.00,
    -- Kategorie des Wunsches
    category VARCHAR(255),
    -- Beschreibung des Wunsches
    description TEXT,
    -- URL des Wunsches
    url VARCHAR(255),
    -- Datum, zu dem der Wunsch angelegt wurde
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    -- Wunsch bereits erfüllt?
    is_fulfilled BOOLEAN DEFAULT FALSE,
    -- Datum, zu dem der Wunsch erledigt wurde
    fulfilled_at TIMESTAMP,
    -- von Wem der Wunsch erfüllt wurde
    fulfilled_by VARCHAR(255)
    -- Zuordnung zu einer Wunschliste, lösche alle Daten, wenn die Wunschliste gelöscht wird
    FOREIGN KEY (wishlist_id) REFERENCES WISHLIST(wishlist_id) ON DELETE CASCADE,
);