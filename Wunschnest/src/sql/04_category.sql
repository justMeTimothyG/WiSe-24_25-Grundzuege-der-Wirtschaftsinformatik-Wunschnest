-- Erstelle Datenbank wenn sie noch nicht existiert
CREATE DATABASE IF NOT EXISTS wunschnest_db;

-- Verwede Datenbank
USE wunschnest_db;

-- Erstelle die `category` Tabelle, wenn sie noch nicht existiert
CREATE TABLE IF NOT EXISTS category (
    -- PK wird automatisch erstellt
    category_id INT PRIMARY KEY AUTO_INCREMENT,
    -- name der Kategorie
    name VARCHAR(255) NOT NULL,
    -- Zuordnung zu einem User, lösche alle Daten, wenn der User gelöscht wird
    user_id INT NOT NULL,
    -- Zuordnung zu anderen Tabellen (Verlinkung)
    FOREIGN KEY (user_id) REFERENCES USERS(user_id) ON DELETE CASCADE
);