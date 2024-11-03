-- Erstelle Datenbank wenn sie noch nicht existiert
CREATE DATABASE IF NOT EXISTS wunschnest_db;

-- Verwede Datenbank
USE wunschnest_db;

-- Erstelle die `favorite` Tabelle, wenn sie noch nicht existiert
CREATE TABLE FAVORITE (
    -- PK wird automatisch erstellt
    favorite_id INT PRIMARY KEY AUTO_INCREMENT,
    -- Zuordnung zu einem User, lösche alle Daten, wenn der User gelöscht wird
    user_id INT NOT NULL,
    -- Zuordnung zu einer Wunschliste, lösche alle Daten, wenn die Wunschliste gelöscht wird
    wishlist_id INT NOT NULL,
    -- Zuordnung zu anderen Tabellen (Verlinkung)
    FOREIGN KEY (user_id) REFERENCES USER(user_id) ON DELETE CASCADE,
    FOREIGN KEY (wishlist_id) REFERENCES WISHLIST(wishlist_id) ON DELETE CASCADE,
    -- Stelle sicher, dass ein Nutzer eine Liste nur ein mal als Favorit markieren kann
    UNIQUE (user_id, wishlist_id)
);